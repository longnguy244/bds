<<<<<<< HEAD

<html>

	<head>
		<meta charset="UTF-8">
		<title>Nội dung hợp đồng</title>
		<style>
		 
            .header{
                text-align: center;
                line-height: 0.6;
            }
			
            .dream{
                margin-left: 1.5 px;
            }
		</style>
	</head>	
		<body>
        <div class="header">
        <h4>CỘNG HÒA XÃ HỘI CHỦ NGHĨA VIỆT NAM</h4>
        <p>Độc lập - Tự do - Hạnh phúc</p>
        <p>----------</p>
        <h4>HỢP ĐỒNG MÔI GIỚI BẤT ĐỘNG SẢN<h4>
        <p>(Số:{{$data->id}}/HDMGBDS)
        </div>
        
        <div class="dream">
        Hôm nay ngày{{$data->ngaylaphd}} tháng năm</br></br>
        <b>Chúng tôi tên:{{$data->ten_kh}}</b>
=======
<!DOCTYPE html>
<html lang="vn">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta charset="utf-8">
    <title>Document</title>
    <style>
        /*@font-face {
            font-family: "Times New Roman";
            src: url({{ storage_path('fonts\times.ttf') }});
        }*/
        body { font-family: "DejaVu Serif" }
    </style>
</head>
<body>
    <center>
        <div class="">
            <h4>CỘNG HÒA XÃ HỘI CHỦ NGHĨA VIỆT NAM</h4>
            <p>Độc lập - Tự do - Hạnh phúc</p>
            <p>----------</p>
            <h4>HỢP ĐỒNG MÔI GIỚI BẤT ĐỘNG SẢN</h4>
            <p>(Số:....../HDMGBDS)</p>
        </div>

        <div class="">
            <p>Hôm nay ngày tháng năm</p>
            <p><b>Chúng tôi tên:</b></p>
>>>>>>> 7b2cc49a1f87a839c8c20842482a6225d9dcdef0
        </div>
        <a href="{{ route('down.hopdong',$data->id) }}">Xuat File</a>
    </center>   
</body>
</html>

    
    
