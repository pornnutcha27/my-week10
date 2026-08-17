<!DOCTYPE html>
<html lang="th">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>เกี่ยวกับเรา</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: "Segoe UI", Tahoma, sans-serif;
        }

        body {
            background: linear-gradient(135deg, #74ebd5, #9face6);
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .container {
            width: 90%;
            max-width: 800px;
            background: #fff;
            padding: 40px;
            border-radius: 20px;
            box-shadow: 0 10px 25px rgba(0,0,0,0.2);
            text-align: center;
        }

        h1 {
            color: #2c3e50;
            margin-bottom: 20px;
            font-size: 40px;
        }

        p {
            color: #555;
            line-height: 1.8;
            font-size: 18px;
            margin-bottom: 30px;
        }

        .btn-group {
            margin-top: 20px;
        }

        .btn {
            display: inline-block;
            text-decoration: none;
            background: #3498db;
            color: white;
            padding: 12px 25px;
            border-radius: 50px;
            margin: 0 10px;
            transition: 0.3s;
            font-size: 16px;
        }

        .btn:hover {
            background: #2980b9;
            transform: translateY(-3px);
            box-shadow: 0 8px 15px rgba(0,0,0,0.2);
        }
    </style>
</head>

<body>

    <div class="container">
        <h1>เกี่ยวกับเรา</h1>

        <p>
            เว็บไซต์นี้จัดทำขึ้นเพื่อให้ข้อมูลเกี่ยวกับองค์กร วิสัยทัศน์
            และบริการของเรา โดยมุ่งเน้นการนำเสนอข้อมูลที่ถูกต้อง
            ใช้งานง่าย และตอบสนองความต้องการของผู้ใช้งานทุกคน
        </p>

        <div class="btn-group">
            <a href="/" class="btn">🏠 หน้าแรก</a>
            <a href="/blog" class="btn">📰 บทความ</a>
        </div>
    </div>

</body>

</html>