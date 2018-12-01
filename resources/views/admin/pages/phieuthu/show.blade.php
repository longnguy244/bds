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
    <div class="col-sm-12">
        <table border="0">
        <tr>
            <td>Công ty Môi giới Dreamhouse</td>
            <td> </td>
            <td>Mẫu số 01 - TT</td>
        </tr>

        <tr>
            <td>Địa chỉ: Ninh Kiều, Cần Thơ</td>
            <td> </td>
            <td>(Ban hành theo Thông tư số 133/2016/TT-BTC ngày 26/8/2016 của Bộ Tài chính)</td>
        </tr>
    </table>
    </div>
    

    <div class="center">
        <p><b>PHIẾU THU</b></p>
        <p>Ngày{{$data->ngaythu}}</p>
    </div>

    <div class="noidung">
        <p>Họ và tên người nộp tiền:{{$data->nguoinoptien}}</p>
        <p>CMND:{{$data->CMND}}</p>
        <p>Lý do thu:{{$data->lydothu}}</p>
        <p>Số tiền: {{$data->tongtien}} (Viết bằng chữ):{{$data->tongtienbangchu}}</p>
        <p>Ngày{{$data->ngaythu}}</p>                   
        <p><b> Người nộp tiền Người nhận tiền</b></p>
    </div>
        <a href="{{ route('down.phieuthu',$data->id) }}">Xuat File</a>

</body>
</html>