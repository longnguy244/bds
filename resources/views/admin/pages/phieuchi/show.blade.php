<!DOCTYPE html>
<html>
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
        
		.dream{
            text-align: left;
            margin-top: 0px;
            margin-bottom: 0px;
        }

		.cent{
            text-align: right;
            margin-top: 0px;
            margin-bottom: 0px;
        }

        .center{
            text-align: center;
            margin-top: 0px;
            margin-bottom: 0px;
        }
        .noidung{
            margin-top: 0px;
            margin-bottom: 0px;
        }

        .noidung p{
            margin-top: 0px;
            margin-bottom: 0px;
        }

        .dieukhoan p{
            margin-top: 0px;
            margin-bottom: 0px;
        }
        
    </style>
</head>
<body>
	<div class="dream">
		<p>Công ty Môi giới Dreamhouse</p>
		<p> Địa chỉ: Ninh Kiều, Cần Thơ
	</div>
	<div class="cent">
		<p><b>Mẫu số 01 - TT</b></p>
		<p>(Ban hành theo Thông tư số 133/2016/TT-BTC ngày 26/8/2016 của Bộ Tài chính)</p>
	</div>

	<div class="center">
		<p><b>PHIẾU CHI</b></p>
		<p>Ngày…. tháng…. năm….</p>
	</div>

	<div class="noidung">
		<p>Họ và tên người nhận tiền:...............................</p>
		<p>CMND:................................................</p>
		<p>Lý do chi:..............................................</p>
		<p>Số tiền: ……...… (Viết bằng chữ):..................</p>
		<p>Kèm theo: …………… Chứng từ gốc: ...........</p>
		<p>Ngày…. tháng…. năm….</p>                   
		<p><b> Người nhận tiền Người chi tiền</b></p>
	</div>
        <a href="{{ route('down.phieuchi',$data->id) }}">Xuat File</a>

</body>
</html>