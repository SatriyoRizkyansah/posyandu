<!DOCTYPE html>
<html>
<head>
    <title>Data Petugas</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            padding: 20px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            padding: 8px;
            border: 1px solid #000;
            font-size: 14px;
        }
        th {
            background-color: #f2f2f2;
        }
        h3 {
            text-align: center;
            margin-bottom: 20px;
        }
        .button-container {
            margin: 20px 0;
        }
        .print-btn, .screenshot-btn, .back-btn {
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            margin-right: 10px;
        }
        .print-btn {
            background-color: #4CAF50;
            color: white;
        }
        .screenshot-btn {
            background-color: #2196F3;
            color: white;
        }
        .back-btn {
            background-color: #f44336;
            color: white;
        }
        .print-btn:hover {
            background-color: #45a049;
        }
        .screenshot-btn:hover {
            background-color: #0b7dda;
        }
        .back-btn:hover {
            background-color: #d32f2f;
        }
        
        @media print {
            .no-print {
                display: none;
            }
        }
        
        #content-to-capture {
            background-color: white;
            padding: 20px;
        }
    </style>
    <!-- Library html2canvas untuk mengambil screenshot -->
    <script src="https://html2canvas.hertzen.com/dist/html2canvas.min.js"></script>
</head>
<body>
    <div class="no-print button-container">
        <button class="print-btn" onclick="window.print()">Print</button>
        <button class="screenshot-btn" onclick="takeScreenshot()">Simpan Screenshot</button>
        <button class="back-btn" onclick="window.history.back()">Kembali</button>
    </div>
    
    <div id="content-to-capture">
        <h3>Data Petugas</h3>
        
        <table>
            <thead>
                <tr>
                    <th>No</th>
                    <th>Username</th>
                    <th>Password</th>
                </tr>
            </thead>
            <tbody>
                @foreach($petugas as $index => $p)
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td>{{ $p->username }}</td>
                        <td>{{ $p->password }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    
    <script>
        function takeScreenshot() {
            // Memberi tahu pengguna bahwa screenshot sedang diproses
            alert("Memproses screenshot... Mohon tunggu sebentar.");
            
            // Mengambil elemen yang ingin di-screenshot
            const element = document.getElementById('content-to-capture');
            
            // Menggunakan html2canvas untuk mengambil screenshot
            html2canvas(element, {
                scale: 2, // Meningkatkan kualitas gambar
                backgroundColor: "#ffffff"
            }).then(canvas => {
                // Mengubah canvas menjadi URL gambar
                const imageData = canvas.toDataURL("image/png");
                
                // Membuat link untuk mengunduh gambar
                const link = document.createElement('a');
                link.href = imageData;
                link.download = 'data_petugas_' + new Date().toISOString().slice(0,10) + '.png';
                
                // Menambahkan link ke dokumen dan mengkliknya
                document.body.appendChild(link);
                link.click();
                
                // Membersihkan link
                document.body.removeChild(link);
            });
        }
    </script>
</body>
</html>