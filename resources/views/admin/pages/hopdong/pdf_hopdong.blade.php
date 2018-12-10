

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
            <p><b>BÊN ĐƯỢC MÔI GIỚI (BÊN B): </b>
            <p>Ông/Bà: {{TenKhachHang($data->id_kh)}}. Sinh năm:{{NgaySinhKhachHang($data->id_kh)}}</p>
            <p>Giấy CMND: {{CMNDKhachHang($data->id_kh)}}.ngày cấp:{{CMNDNgaycap($data->id_kh)}} </p>
            <p>Hộ khẩu: {{HoKhauKH($data->id_kh)}}
            <br>Địa chỉ hiện tại: {{DiaChiKH($data->id_kh)}}
            <br>Điện thoại liên lạc: {{SDTKH($data->id_kh)}}
            <br>Là chủ sở hữu bất động sản: {{soCNQSDD($data->id_bds)}} </p>
            <p>Các chứng từ sở hữu và tham khảo về bất động sản đã được cơ quan thẩm quyền cấp cho bên B gồm có:{{ChungTu($data->id)}}</p>
        </div>
        <div class="dieukhoan">
            <p><b>Hai Bên cùng thỏa thuận ký hợp đồng dịch vụ với nội dung sau:</p>
                <p>ĐIỀU 1: NỘI DUNG HỢP ĐỒNG</b></p>
                <p>1.1 Bên B đồng ý giao cho Bên A thực hiện dịch vụ môi giới bán (hoặc cho thuê) bất động sản do Bên B là chủ sở hữu.</p>
                <p>1.2 Đặc điểm của BĐS và giấy tờ pháp lý về BĐS là đối tượng của dịch vụ này được mô tả như sau:</p>
                <p>Lọai bất động sản:{{Loaibds($data->id_bds)}}</p>
                <p>Địa chỉ:{{DCBDS($data->id_bds)}}</p>
                <p>Diện tích khuôn viên đất:{{DTMD($data->id_bds)}} m2</p>
                <p>Diện tích đất xây dựng:{{DTXD($data->id_bds)}}m2</p>
                <p>Diện tích sử dụng:{{DTSD($data->id_bds)}}m2</p>
                <p>Cấu trúc:{{cautruc($data->id_bds)}}</p>
                <p>Tiện nghi:{{tiennghi($data->id_bds)}}</p>
                <p>1.3 Giá {{ $bds->hinhthuc }} bất động sản này được hai Bên thỏa thuận trên cơ sở giá do Bên A thẩm định là:{{$data->giaban}} VNĐ.(bằng chữ: …………………………………...………………………..………đồng)</p>
                <p>1.3 Giá thuê bất động sản này được hai Bên thỏa thuận trên cơ sở giá do Bên A thẩm định là:{{$data->giathue}} VNĐ.(bằng chữ: …………………………………...………………………..………đồng)</p>
                <p>Trong quá trình thực hiện hợp đồng nếu các bên xét thấy cần điều chỉnh giá bán, hai Bên phải thỏa thuận bằng văn bản.</p>
            <p><b> ĐIỀU 2: PHÍ DỊCH VỤ VÀ PHƯƠNG THỨC THANH TOÁN</b></p>
                <p>2.1 Bên B đồng ý thanh toán cho Bên A số tiền môi giới là {{$data->phi_mg}} VNĐ ( đã bao gồm thuế VAT) (Số tiền bằng chữ: ……………………………………………………….…………….đồng.</p>
                <p>2.2 Số tiền dịch vụ này không bao gồm các chi phí liên quan khác phát sinh ngoài dịch vụ môi giới tư vấn bán tài sản mà bên A thực hiện.</p>
                <p>2.3 Phí môi giới được Bên B thanh toán cho Bên A một lần bằng tiền mặt trong vòng 7 (mười hai) ngày kể từ ngày giao dịch thành công. Trong trường hợp khách hàng đã đặt cọc mà chịu mất cọc thì bên B thanh toán cho bên A trong vòng 03 (ba) ngày kể từ ngày được xác định là khách hàng chấp nhận mất cọc.</p>
                <p><b>ĐIỀU 3: THỜI GIAN THỰC HIỆN DỊCH VỤ</b></p>
                <p>3.1 Từ {{$data->ngaylaphd}} đến {{$data->thoihanhopdong}}</p>
                <p>3.2 Hết thời hạn này hai bên có thể thỏa thuận thêm và được ký kết bằng một phụ lục hợp đồng.</p>
                <p><b>ĐIỀU 4: THỎA THUẬN CHUNG</b></p>
                <p>4.1 Trong quá trình thực hiện dịch vụ môi giới bên B không phải bỏ ra bất cứ khoản chi phí nào. Tất cả các chi phí liên quan đến việc quảng cáo rao bán sản phẩm sẽ do bên A chịu.</p>
                <p>4.2 Giao dịch được coi là thành công khi khách hàng ký hợp đồng mua bán bất động sản (hoặc hợp đồng đặt cọc, hợp đồng góp vốn, giấy thỏa thuận mua bán hoặc ký bất kỳ loại hợp đồng, giấy thỏa thuận nào khác có liên quan đến bất động sản) do bên A thực hiện hoạt động môi giới.</p>
                <p>4.3 Trong thời gian thực hiện dịch vụ, nếu khách hàng do bên A giới thiệu đã đặt cọc nhưng bị mất cọc do vi phạm hợp đồng hoặc chịu mất cọc vì bất kỳ lý do gì thì mỗi bên được hưởng 50% (năm mươi phần trăm) trên số tiền đặt cọc đó.</p>
                <p>4.4 Khách hàng của bên A là người được nhân viên bên A hoặc bất kỳ người nào được bên A giới thiệu hoặc khách hàng của bên A giới thiệu khách hàng khác đến bên B để ký hợp đồng, đặt cọc giữ chỗ hay tìm hiểu để sau đó ký hợp đồng mua bán với bên B. Nếu trước khi ký hợp đồng mua bán bất động sản mà khách hàng yêu cầu thay đổi người đứng tên trên hợp đồng thì vẫn được xem là khách hàng của bên A.</p>
                <p>4.5 Giá bán bất động sản theo khoản 2.1 Điều 2 nêu trên theo thỏa thuận giữa bên A và bên B (Gọi là giá bán ban đầu)</p>
                <p>4.6 Trường hợp bên A giới thiệu khách mua cho bên B và khách mua đã trả giá theo giá bán ban đầu nhưng bên B không bán thì coi như bên A đã thực hiện xong hợp đồng, bên B vẫn phải thanh tóan cho bên A: 5% (Bằng chữ:…... phần trăm) trên giá bán thực tế. (Việc không bán bao gồm sự xác nhận không bán bằng văn bản của người bán hoặc sau 3 (ba) ngày kể từ ngày người mua xác nhận mua nhưng người bán không nhận tiền đặt cọc).</p>
                <p>4.7 Trong thời gian thực hiện hợp đồng hoặc trong vòng 6 tháng sau ngày chấm dứt hợp đồng này nếu khách hàng do bên A giới thiệu hoặc khách hàng đó giới thiệu khách hàng khác đến mua căn hộ của bên B thì bên A vẫn được hưởng phí môi giới như mức phí môi giới đã thỏa thuận tại khoản 2.1 Điều 2 của Hợp đồng này.</p>
        
                <p><b> ĐIỀU 5: QUYỀN VÀ NGHĨA VỤ CỦA BÊN A</b></p>
                <p>5.1. Quyền của bên A:</p>
                <p>a) Yêu cầu bên B cung cấp hồ sơ, thông tin, tài liệu liên quan đến bất động sản;</p>
                <p>b) Được nhận phí môi giới theo thỏa thuận;</p>
                <p>c) Được nhận 50% trên số tiền đặt cọc khi khách hàng chấp nhận mất cọc hoặc khi khách hàng bị mất cọc do vi phạm cam kết.</p>
                <p>d) Thuê tổ chức, cá nhân môi giới khác thực hiện công việc môi giới bất động sản trong phạm vi hợp đồng môi giới bất động sản với bên B nhưng phải chịu trách nhiệm trước bên B về kết quả môi giới.</p>
                <p>e) Đơn phương chấm dứt hoặc hủy bỏ hợp đồng môi giới bất động sản khi bên B vi phạm điều kiện để đơn phương chấm dứt hoặc hủy bỏ hợp đồng do hai bên thỏa thuận trong hợp đồng hoặc theo quy định của pháp luật.</p>
                <p>5.2. Nghĩa vụ của bên A:</p>
                <p>a) Thực hiện đúng hợp đồng môi giới bất động sản đã ký;</p>
                <p>b) Cung cấp thông tin về bất động sản được đưa vào kinh doanh và chịu trách nhiệm về thông tin do mình cung cấp;</p>
                <p>c) Hỗ trợ các bên trong việc đàm phán, ký kết hợp đồng mua bán, chuyển nhượng, thuê, thuê mua bất động sản;</p>
                <p>d) Thực hiện chế độ báo cáo theo quy định của pháp luật và chịu sự kiểm tra, thanh tra của cơ quan nhà nước có thẩm quyền;</p>
                <p>e) Bồi thường thiệt hại do lỗi của mình gây ra;</p>
                <p>f) Thường xuyên báo cho bên B biết về tiến độ thực hiện công việc và phối hợp với bên B để giải quyết những vướng mắc phát sinh trong quá trình thực hiện công việc;</p>
                <p>g) Chịu mọi chi phí liên quan đến phạm vi công việc mà mình thực hiện.</p>
                <p><b> ĐIỀU 6: QUYỀN VÀ NGHĨA VỤ CỦA BÊN B:</b></p>
                <p>6.1. Quyền của bên B:</p>
                <p>a) Không chịu bất kỳ chi phí nào khác cho bên A ngoài phí dịch vụ môi giới nếu giao dịch thành công;</p>
                <p>b) Được nhận 50% trên số tiền đặt cọc khi khách hàng chấp nhận mất cọc hoặc khi khách hàng bị mất cọc do vi phạm cam kết;</p>
                <p>c) Được bên A thực hiện miễn phí: Dịch vụ chuyển quyền sở hữu (chi phí giao dịch ngoài và các lọai phí, lệ phí nếu có phát sinh do bên B chịu), trung gian thanh toán qua Công ty Dreamhouse khi giao dịch môi giới thành công.</p>
                <p>6.2. Nghĩa vụ của bên B:</p>
                <p>a) Cung cấp đầy đủ và kịp thời cho bên A những giấy tờ liên quan.</p>
                <p>b) Hợp tác với bên A trong quá trình thực hiện hợp đồng này.</p>
                <p>c) Ký hợp đồng bán/cho thuê bất động sản trực tiếp với người mua/người thuê do bên B giới thiệu. Chịu tất cả các chi phí liên quan đến thủ tục mua bán bất động sản theo quy định của nhà nước hoặc theo thỏa thuận với người mua.</p>
                <p>d) Thanh toán phí môi giới cho bên A theo Điều 2 của Hợp đồng;</p>
                <p><b> ĐIỀU 7: VI PHẠM HỢP ĐỒNG</b></p>
                <p>7.1 Trường hợp bên B không thanh toán hoặc thanh toán không đủ hoặc không đúng phí môi giới cho bên B theo thỏa thuận tại Điều 2 của Hợp đồng này thì bên B phải chịu lãi chậm thanh toán trên số tiền và số ngày chậm thanh toán với lãi suất 2,5%/tháng. Việc chậm thanh toán hoặc thanh toán không đủ này cũng không vượt quá 10 (mười) ngày, nếu quá 10 (mười) ngày thì bên A được quyền đơn phương chấm dứt hợp đồng và bên B vẫn phải trả phí dịch vụ cho bên A như trong trường hợp bên A môi giới thành công.</p>
                <p>7.2 Trường hợp bên A không tiến hành thực hiện dịch vụ hoặc thực hiện dịch vụ không đúng như đã thỏa thuận thì bên B có quyền đơn phương chấm dứt hợp đồng mà không phải trả cho bên A bất kỳ khoản phí nào đồng thời bên A phải trả cho bên B một khoản tiền phạt tương đương với số tiền phí thực hiện dịch vụ như quy định trong khoản 2.1 Điều 2 của Hợp đồng này.</p>
                <p>7.3 Nếu một trong hai bên đơn phương chấm dứt hợp đồng trái với các thỏa thuận trong trong Hợp đồng này thì bên đơn phương chấm dứt hợp đồng đó phải chịu một khoản tiền phạt tương đương với số tiền phí dịch vụ như quy định trong khoản 2.1 Điều 2 của Hợp đồng này.</p>
                <p><b> ĐIỀU 8: ĐIỀU KHOẢN CHUNG</b></p>
                <p>Các bên cam kết cùng nhau thực hiện hợp đồng. Nếu trong quá trình thực hiện có phát sinh vướng mắc các bên sẽ trao đổi trên tinh thần hợp tác, trường hợp hai bên không thỏa thuận được việc tranh chấp sẽ được phán quyết bởi tòa án.</p>
                <p>Hợp đồng này có hiệu lực kể từ {{$data->ngaylaphd}}. đến {{$data->thoihanhopdong}}.</p>
                <p>Hợp đồng được lập thành 02 (hai) bản mỗi bên giữ một bản và có giá trị như nhau.</p>
                 <div>
            <table border="0" width="100%">
        <tr>
            <td width="40%"><b>ĐẠI DIỆN BÊN A</b><br>
            </td>
            <td width="20%"></td>
            <td style="text-align: center;">
            <b>ĐẠI DIỆN BÊN B</b><br>
            </td>
        </tr>  
    </table>
        </div> 

        </div>
      
</body>
</html>

    
    
