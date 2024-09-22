<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Data Table with Search and Pagination</title>
    <style>
        /* Add some basic styling */
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
        #pagination button {
            margin: 2px;
            padding: 5px 10px;
        }
    </style>
</head>
<body>
    <h1>Data Table</h1>
    <input type="text" id="search" placeholder="Search...">
    <button onclick="fetchData(1)">Search</button>
    <table id="data-table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
            <!-- Data will be populated here -->
        </tbody>
    </table>
    <div id="pagination">
        <!-- Pagination buttons will be populated here -->
    </div>

    <script>
        function fetchData(page) {
            const search = document.getElementById('search').value;
            const xhr = new XMLHttpRequest();
            xhr.open('GET', `fetch_data.php?page=${page}&search=${search}`, true);
            xhr.onload = function() {
                if (this.status === 200) {
                    const response = JSON.parse(this.responseText);
                    const tableBody = document.getElementById('data-table').getElementsByTagName('tbody')[0];
                    tableBody.innerHTML = '';

                    response.data.forEach(row => {
                        const tr = document.createElement('tr');
                        tr.innerHTML = `
                            <td>${row.id}</td>
                            <td>${row.name}</td>
                            <td>${row.email}</td>
                        `;
                        tableBody.appendChild(tr);
                    });

                    const pagination = document.getElementById('pagination');
                    pagination.innerHTML = '';

                    for (let i = 1; i <= response.pages; i++) {
                        const button = document.createElement('button');
                        button.innerText = i;
                        button.onclick = () => fetchData(i);
                        if (i === response.current) {
                            button.style.fontWeight = 'bold'; // Highlight the current page button
                        }
                        pagination.appendChild(button);
                    }
                }
            };
            xhr.send();
        }

        document.addEventListener('DOMContentLoaded', () => {
            fetchData(1);
        });
    </script>
</body>
</html>
