

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

        

    </style>
</head>
<body>
    
        <div class="center">
            <h4>CỘNG HÒA XÃ HỘI CHỦ NGHĨA VIỆT NAM</h4>
            <p>Độc lập - Tự do - Hạnh phúc</p>
            <p>----------</p>
            <h4>HỢP ĐỒNG MÔI GIỚI BẤT ĐỘNG SẢN</h4>
            <p>(Số:{{$data->id}}/HDMGBDS)

        </div>

        <div class="noidung">
            <p>Hôm nay ngày tháng năm. Tại: Trung tâm môi giới bất động sản Dreamhouse.<br>Chúng tôi gồm có:</p>   
            <p><b>BÊN MÔI GIỚI (BÊN A): TRUNG TÂM MÔI GIỚI BẤT ĐỘNG SẢN DREAMHOUSE</b></p>
            <p>Địa chỉ: 1234 Võ Văn Kiệt, Quận Ninh Kiều, TPCT</p>
            <p>Điện thoại: 0939928143.Fax: 02727281918</p>
            Mã số thuế: 0224489769 Tài khoản số: 87294057241894. Mở tại ngân hàng: Vietcombank
            Do Ông (Bà): Ngụy Yến Nhi.Sinh năm: 1996 làm đại diện
            <p><b>BÊN ĐƯỢC MÔI GIỚI (BÊN B): {{TenKhachHang($data->id_kh)}}</b>
            <p>Ông/Bà: {{TenKhachHang($data->id_kh)}}. Sinh năm:{{NgaySinhKhachHang($data->id_kh)}}</p>
            <p>Giấy CMND: {{CMNDKhachHang($data->id_kh)}}.ngày cấp:{{CMNDNgaycap($data->id_kh)}} </p>
            <p>Hộ khẩu: {{HoKhauKH($data->id_kh)}}
            <br>Địa chỉ hiện tại: {{DiaChiKH($data->id_kh)}}
            <br>Điện thoại liên lạc: {{SDTKH($data->id_kh)}}
            <br>Là chủ sở hữu bất động sản: {{soCNQSDD($data->id_bds)}} </p>
            <p>Các chứng từ sở hữu và tham khảo về bất động sản đã được cơ quan thẩm quyền cấp cho bên B gồm có:{{ChungTu($data->id)}}</p>
        </div>
        <a href="{{ route('down.hopdong',$data->id) }}">Xuat File</a>
      
</body>
</html>

    
    
