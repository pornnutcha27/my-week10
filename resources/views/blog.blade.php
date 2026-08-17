<!DOCTYPE html>
<html lang="th">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>บทความทั้งหมด</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
        }

        body {
            background: linear-gradient(135deg, #4facfe, #00f2fe);
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .container {
            width: 90%;
            max-width: 850px;
            background: #fff;
            padding: 40px;
            border-radius: 20px;
            box-shadow: 0 12px 25px rgba(0, 0, 0, 0.2);
        }

        h1 {
            text-align: center;
            color: #2c3e50;
            margin-bottom: 25px;
            font-size: 38px;
        }

        .article {
            background: #f8f9fa;
            padding: 20px;
            border-left: 6px solid #3498db;
            border-radius: 10px;
            margin-bottom: 25px;
            transition: .3s;
        }

        .article:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 18px rgba(0,0,0,.15);
        }

        .article h2 {
            color: #3498db;
            margin-bottom: 10px;
        }

        .article p {
            color: #555;
            line-height: 1.8;
            font-size: 17px;
        }

        .btn {
            display: inline-block;
            text-decoration: none;
            background: #3498db;
            color: #fff;
            padding: 12px 25px;
            border-radius: 50px;
            transition: .3s;
            font-size: 16px;
        }

        .btn:hover {
            background: #2980b9;
            transform: scale(1.05);
        }

        .back {
            text-align: center;
        }
    </style>
</head>

<body>

    <div class="container">

        <h1>📚 บทความทั้งหมด</h1>

        <div class="article">
            <h2>บทความที่ 1</h2>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Magnam consectetur quos sapiente, quibusdam beatae velit sed,
                quia similique vel aperiam, officia consequuntur hic aut
                repudiandae cupiditate alias suscipit vero architecto.
            </p>
        </div>

        <div class="article">
            <h2>บทความที่ 2</h2>
            <p>
                สามารถเพิ่มบทความใหม่ได้ตามต้องการ โดยแต่ละบทความจะอยู่ใน
                กล่องแยกกันเพื่อให้อ่านง่าย และรองรับการเพิ่มข้อมูลในอนาคต
            </p>
        </div>

        <div class="back">
            <a href="/" class="btn">🏠 กลับหน้าแรก</a>
        </div>

    </div>

</body>

</html>