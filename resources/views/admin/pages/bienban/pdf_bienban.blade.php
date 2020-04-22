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

        .dieukhoan p{
            margin-top: 0px;
            margin-bottom: 0px;
        }
        

    </style>
</head>
<<body>
    <div class="center">
            <h4>CỘNG HÒA XÃ HỘI CHỦ NGHĨA VIỆT NAM</h4>
            <p>Độc lập - Tự do - Hạnh phúc</p>
            <p>----------</p>
            <h4>BIÊN BẢN THANH LÝ HỢP ĐỒNG MÔI GIỚI BẤT ĐỘNG SẢN</h4>
            <p>(Số:{{$data->id}}/BBTLHD)
        </div>
    <div class="noidung">
        <p>Căn cứ vào Hợp đồng Môi giới Bất động sản số: {{$data->id}} ký ngày {{$data->ngaylaphd}} giữa Công ty Môi giới bất động sản Dreamhouse và Ông/ Bà{{TenKhachHang($data->id_kh)}}</p>
        <p>Hôm nay, ngày ...... tháng ..... năm ........ Trung tâm môi giới bất động sản Dreamhouse. Chúng tôi gồm:</p>
        <p><b>BÊN MÔI GIỚI (BÊN A): TRUNG TÂM MÔI GIỚI BẤT ĐỘNG SẢN DREAMHOUSE</b></p>
            <p>Địa chỉ: 1234 Võ Văn Kiệt, Quận Ninh Kiều, TPCT</p>
            <p>Điện thoại: 0856789450.Fax: 02727281918</p>
            Mã số thuế: 0224489769 Tài khoản số: 87294057241894. Mở tại ngân hàng: Vietcombank
            Do Ông (Bà): Ngụy Quới Long.Sinh năm: 1997 làm đại diện
            <p><b>BÊN ĐƯỢC MÔI GIỚI (BÊN B): {{TenKhachHang($data->id_kh)}}</b>
            <p>Ông/Bà: {{TenKhachHang($data->id_kh)}}. Sinh năm:{{NgaySinhKhachHang($data->id_kh)}}</p>
            <p>Giấy CMND: {{CMNDKhachHang($data->id_kh)}}.ngày cấp:{{CMNDNgaycap($data->id_kh)}} </p>
            <p>Hộ khẩu: {{HoKhauKH($data->id_kh)}}
            <br>Địa chỉ hiện tại: {{DiaChiKH($data->id_kh)}}
            <br>Điện thoại liên lạc: {{SDTKH($data->id_kh)}}
            <br>Là chủ sở hữu bất động sản: {{soCNQSDD($data->id_bds)}} </p>
            <p>Các chứng từ sở hữu và tham khảo về bất động sản đã được cơ quan thẩm quyền cấp cho bên B gồm có:{{ChungTu($data->id)}}</p>
            <p>Hai bên thống nhất ký biên bản thanh lý Hợp đồng Môi giới Bất đổng sản số: {{$data->id}}/BBTLHD. ký ngày {{$data->ngaylapbb}}  với nội dung sau:</p>
    </div>
    <div class="dieukhoan">
        <p><b>ĐIỀU 1</b></p>
        <p>Bên A đã tiến hành Môi giới nhà đất cho Bên B theo hợp đồng Môi giới Bất động sản số: {{$data->id}}. ký ngày {{$data->ngaylaphd}}</p>
        <p><b>ĐIỀU 2: Giá trị hợp đồng và phương thức thanh toán:</b></p>
        <p>Bên B đồng ý thanh toán cho Bên A mức phí dịch vụ như sau:</p>
        <p>+ Giá trị hợp đồng trước thuế: …….…………………………………………………………………</p>
        <p>+ Thuế VAT: ……………………………………………………………………………………………</p>
        <p>+ Giá trị hợp đồng sau thuế: …………………………………………………………………………</p>
        <p>Phương thức thanh toán: Bên B đồng ý thanh toán cho Bên A khoản tiền trên bằng........................................</p>
        <p><b>ĐIỀU 3:</b></p>
        <p>Bên B đồng ý thanh toán toàn bộ số tiền trên cho Bên A theo như quy định tại Điều 2 của Biên bản này.</p>
        <p>Hai bên thống nhất thanh lý Hợp đồng Môi giới Bất động sản số: {{$data->id}} ký ngày {{$data->ngaylaphd}}  giữa Công ty Môi giới Bất động sản và Ông/ Bà {{TenKhachHang($data->id_kh)}}</p>
        <p>Biên bản thanh lý này được lập thành 02 bản mỗi bên giữ một bản và có giá trị pháp lý như nhau.</p>
        <p><b>ĐẠI DIỆN BÊN A&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;ĐẠI DIỆN BÊN B</b></p>
        </div>
</body>
</html>