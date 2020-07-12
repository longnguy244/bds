@extends('web.layouts.base')

@section('title')
    Thông tin hợp đồng - DreamHouse
@endsection

@push('css')
    <style>
        .property-thumb > img {
            width: 200px;
            height: 200px;
            object-fit: cover;
        }

        span {
            font-size: 15px;
        }

        body { 
            font-family:  "DejaVu Serif" 
        }
        
        .center {
            text-align:  center;
            margin-top:  0px;
            margin-bottom:  0px;
        }
        
        b {
            color: black;
            font-weight: bold;
        }

        .contract {
            padding: 40px;
            padding-bottom:130px;
            margin:30px 0;
            border: solid #947054;
            border-radius: 40px;
        }

        p {
            color: black;
            font-weight: 100;
        }

    </style>
@endpush

@section('main')
    <!-- ##### Header Area Start ##### -->
    @include('web.blocks.header')
    <!-- ##### Header Area End ##### -->

    <!-- ##### Elements Area Start ##### -->
    <section class="elements-area section-padding-100-0">
        <div class="container">
            <div class="contract">
                <div class="center">
                    <h5>CỘNG HÒA XÃ HỘI CHỦ NGHĨA VIỆT NAM</h5>
                    <b>Độc lập - Tự do - Hạnh phúc</b>
                    <p>-------------</p>
                    <h5>HỢP ĐỒNG THỎA THUẬN ĐẶT CỌC</h5>
                    <h6>(V/v: Thỏa thuận đặt cọc mua bán nhà, đất)</h6>
                    <p>(Số: <b></b>/HDMGBDS)
                </div>
                <div class="noidung">
                    <p>Hôm nay, ngày <b>{{ date('d') }}</b> tháng <b>{{ date('m') }}</b> năm <b>{{ date('Y') }}</b>
                    <br>Tại: <b style="text-transform: uppercase;">Trung tâm môi giới bất động sản Dreamhouse.</b>
                    <br>Chúng tôi gồm có: </p>
                    <p><b>BÊN NHẬN ĐẶT CỌC: (Sau đây gọi tắt là Bên A):  TRUNG TÂM MÔI GIỚI BẤT ĐỘNG SẢN DREAMHOUSE</b></p>
                    <pre>
                        <br>Địa chỉ     : <b>12 Võ Văn Kiệt, quận Ninh Kiều, thành phố Cần Thơ.</b>
                        <br>Điện thoại  : <b>(0292) 3 789 450</b>. Fax: <b>(0292) 3 281 918</b>
                        <br>Mã số thuế  : <b>01824489769</b>
                        <br>Tài khoản số: <b>87294057241894 tại ngân hàng Vietcombank chi nhánh Tây Đô.</b>
                        <br>Do Ông (Bà) : <b>Ngụy Quới Long</b>. Sinh năm: <b>1997</b> làm đại diện.
                    </pre>
                    <p><b>BÊN ĐẶT CỌC: (Sau đây gọi tắt là Bên B):  </b>
                    <pre>
                        <br>Ông/Bà                    :  <b>{{ $kh->ten_kh }}</b>. Sinh năm: <b>{{ $kh->ngaysinh_kh }}</b>
                        <br>Giấy CMND                 :  <b>{{ $kh->cmnd_kh }}</b>. Ngày cấp: <b>{{ $kh->ngaycap_kh }}</b>
                        <br>Hộ khẩu                   :  <b>{{ $kh->hokhau }}</b>
                        <br>Địa chỉ hiện tại          :  <b>{{ $kh->diachi_kh }}</b>
                        <br>Điện thoại liên lạc       :  <b>{{ $kh->phone_kh }}</b>
                    </pre>
                </div>
                <div class="dieukhoan">
                    <p>Các bên tự nguyện cùng nhau lập và ký Hợp đồng đặt cọc này để bảo đảm thực hiện việc chuyển nhượng quyền sử dụng đất và tài sản gắn liền với đất theo các thoả thuận sau đây:</p>
                    <p><b>ĐIỀU 1: ĐỐI TƯỢNG HỢP ĐỒNG</b></p>
                    <p>1. Đối tượng của Hợp đồng này là số tiền: 100.000.000 đồng (Bằng chữ: Một trăm triệu đồng chẵn) tiền Việt Nam hiện hành mà bên B đặt cọc cho bên A để được nhận chuyển nhượng toàn bộ thửa đất số 12, 
                    tờ bản đồ số 12 và tài sản gắn liền với đất tại địa chỉ số nhà … đường Yên Ninh, phường Yên Ninh, thành phố Cần Thơ. Theo Giấy chứng nhận quyền sử dụng đất, quyền sở hữu nhà ở và tài sản khác gắn liền với đất số phát hành BN 596672, 
                    Số vào sổ cấp GCN: CH 00536/942/QĐ-UBND do UBND thành phố Cần Thơ cấp ngày 27/02/2013 mang tên ông: Đỗ Hồng K.</p>
                    <p>Thông tin cụ thể như sau:</p>
                    <p>1. Quyền sử dụng đất: </p>
                    <pre>
                        <br>Loại bất động sản       : <b>{{ Loaibds($bds->id_loaibds) }}</b>
                        <br>Địa chỉ                 : <b>{{ DCBDS($bds->id) }}</b>
                        <br>Diện tích khuôn viên đất: <b>{{ DTMD($bds->id) }} m<sup>2</sup></b>
                        <br>Diện tích đất xây dựng  : <b>{{ DTXD($bds->id) }} m<sup>2</sup></b>
                        <br>Diện tích sử dụng       : <b>{{ DTSD($bds->id) }} m<sup>2</sup></b>
                        <br>Cấu trúc                : <b>{{ cautruc($bds->id) }}</b>
                        <br>Tiện nghi               : <b>{{ tiennghi($bds->id) }}</b>
                    </pre>
                    <p>1.3 Bằng hợp đồng này, Bên bán đồng ý bán đứt, Bên mua đồng ý mua đứt toàn bộ diện tích đất ở và 
                    hiện trạng nhà ở như đã nói trên và phải tuân thủ theo các yêu cầu / 
                    quy định hiện hành về chuyển nhượng Nhà Đất ở của Nhà nước và Pháp luật.</p>
                    
                    <p><b> ĐIỀU 2: GIÁ CẢ, PHƯƠNG THỨC THANH TOÁN VÀ THỜI HẠN THỰC HIỆN</b></p>
                        <p>2.1 Giá mua bán toàn bộ diện tích nhà đất ở nói trên đã được hai bên thoả thuận là:
                        <b>{{ $bds->gia }}</b> đ. (Ghi bằng chữ: <b>Năm tỷ</b> đồng Việt Nam chẵn) 
                        và không thay đổi vì bất cứ lý do gì.</p>
                        <p>2.2 Phương thức thanh toán:</p>
                        <p>Hai bên (Bên A và Bên B) đã cùng thống nhất sẽ thực hiện việc thanh toán tổng giá trị mua bán Nhà đất ở theo 01 đợt, cụ thể như sau:</p>
                        <p>* Đợt 1: Giao toàn bộ số tiền là <b>{{ $bds->gia }}</b> đ cho bên Bán.</p>
                        <p>* Khi trả tiền sẽ ghi giấy biên nhận do các bên cùng ký xác nhận.</p>
                        <p>2.3 Thời hạn thực hiện hợp đồng</p>
                        <p>* Thanh toán 1 đợt.</p>
                        <p>* Ngay sau khi nhận tiền, bên A phải giao lại ngay hợp đồng mua bán công chứng (đủ số lượng bản gốc của bên B) và bàn giao nhà đất ở cho bên B với sự chứng kiến của các nhân chứng.</p>
                        <p><b>ĐIỀU 3:  THỜI GIAN THỰC HIỆN DỊCH VỤ</b></p>
                        <p>3.1 Từ <b>{{ date('d/m/Y') }}</b> đến <b></b></p>
                        <p>3.2 Hết thời hạn này hai bên có thể thỏa thuận thêm và được ký kết bằng một phụ lục hợp đồng.</p>
                        <p><b>ĐIỀU 4:  THỎA THUẬN CHUNG</b></p>
                        <p>4.1 Trong quá trình thực hiện dịch vụ môi giới bên B không phải bỏ ra bất cứ khoản chi phí nào. Tất cả các chi phí liên quan đến việc quảng cáo rao bán sản phẩm sẽ do bên A chịu.</p>
                        <p>4.2 Giao dịch được coi là thành công khi khách hàng ký hợp đồng mua bán bất động sản (hoặc hợp đồng đặt cọc, hợp đồng góp vốn, giấy thỏa thuận mua bán hoặc ký bất kỳ loại hợp đồng, giấy thỏa thuận nào khác có liên quan đến bất động sản) do bên A thực hiện hoạt động môi giới.</p>
                        <p>4.3 Trong thời gian thực hiện dịch vụ, nếu khách hàng do bên A giới thiệu đã đặt cọc nhưng bị mất cọc do vi phạm hợp đồng hoặc chịu mất cọc vì bất kỳ lý do gì thì mỗi bên được hưởng 50% (năm mươi phần trăm) trên số tiền đặt cọc đó.</p>
                        <p>4.4 Khách hàng của bên A là người được nhân viên bên A hoặc bất kỳ người nào được bên A giới thiệu hoặc khách hàng của bên A giới thiệu khách hàng khác đến bên B để ký hợp đồng, đặt cọc giữ chỗ hay tìm hiểu để sau đó ký hợp đồng mua bán với bên B. Nếu trước khi ký hợp đồng mua bán bất động sản mà khách hàng yêu cầu thay đổi người đứng tên trên hợp đồng thì vẫn được xem là khách hàng của bên A.</p>
                        <p>4.5 Giá bán bất động sản theo khoản 2.1 Điều 2 nêu trên theo thỏa thuận giữa bên A và bên B (Gọi là giá bán ban đầu)</p>
                        <p>4.6 Trường hợp bên A giới thiệu khách mua cho bên B và khách mua đã trả giá theo giá bán ban đầu nhưng bên B không bán thì coi như bên A đã thực hiện xong hợp đồng, bên B vẫn phải thanh tóan cho bên A:  5% (Bằng chữ:  năm phần trăm) trên giá bán thực tế. (Việc không bán bao gồm sự xác nhận không bán bằng văn bản của người bán hoặc sau 3 (ba) ngày kể từ ngày người mua xác nhận mua nhưng người bán không nhận tiền đặt cọc).</p>
                        <p>4.7 Trong thời gian thực hiện hợp đồng hoặc trong vòng 6 tháng sau ngày chấm dứt hợp đồng này nếu khách hàng do bên A giới thiệu hoặc khách hàng đó giới thiệu khách hàng khác đến mua căn hộ của bên B thì bên A vẫn được hưởng phí môi giới như mức phí môi giới đã thỏa thuận tại khoản 2.1 Điều 2 của Hợp đồng này.</p>
                
                        <p><b> ĐIỀU 5:  QUYỀN VÀ NGHĨA VỤ CỦA BÊN A</b></p>
                        <p>5.1. Quyền của bên A: </p>
                        <p>a) Yêu cầu bên B cung cấp hồ sơ, thông tin, tài liệu liên quan đến bất động sản;</p>
                        <p>b) Được nhận phí môi giới theo thỏa thuận;</p>
                        <p>c) Được nhận 50% trên số tiền đặt cọc khi khách hàng chấp nhận mất cọc hoặc khi khách hàng bị mất cọc do vi phạm cam kết.</p>
                        <p>d) Thuê tổ chức, cá nhân môi giới khác thực hiện công việc môi giới bất động sản trong phạm vi hợp đồng môi giới bất động sản với bên B nhưng phải chịu trách nhiệm trước bên B về kết quả môi giới.</p>
                        <p>e) Đơn phương chấm dứt hoặc hủy bỏ hợp đồng môi giới bất động sản khi bên B vi phạm điều kiện để đơn phương chấm dứt hoặc hủy bỏ hợp đồng do hai bên thỏa thuận trong hợp đồng hoặc theo quy định của pháp luật.</p>
                        <p>5.2. Nghĩa vụ của bên A: </p>
                        <p>a) Thực hiện đúng hợp đồng môi giới bất động sản đã ký;</p>
                        <p>b) Cung cấp thông tin về bất động sản được đưa vào kinh doanh và chịu trách nhiệm về thông tin do mình cung cấp;</p>
                        <p>c) Hỗ trợ các bên trong việc đàm phán, ký kết hợp đồng mua bán, chuyển nhượng, thuê, thuê mua bất động sản;</p>
                        <p>d) Thực hiện chế độ báo cáo theo quy định của pháp luật và chịu sự kiểm tra, thanh tra của cơ quan nhà nước có thẩm quyền;</p>
                        <p>e) Bồi thường thiệt hại do lỗi của mình gây ra;</p>
                        <p>f) Thường xuyên báo cho bên B biết về tiến độ thực hiện công việc và phối hợp với bên B để giải quyết những vướng mắc phát sinh trong quá trình thực hiện công việc;</p>
                        <p>g) Chịu mọi chi phí liên quan đến phạm vi công việc mà mình thực hiện.</p>
                        <p><b> ĐIỀU 6:  QUYỀN VÀ NGHĨA VỤ CỦA BÊN B: </b></p>
                        <p>6.1. Quyền của bên B: </p>
                        <p>a) Không chịu bất kỳ chi phí nào khác cho bên A ngoài phí dịch vụ môi giới nếu giao dịch thành công;</p>
                        <p>b) Được nhận 50% trên số tiền đặt cọc khi khách hàng chấp nhận mất cọc hoặc khi khách hàng bị mất cọc do vi phạm cam kết;</p>
                        <p>c) Được bên A thực hiện miễn phí:  Dịch vụ chuyển quyền sở hữu (chi phí giao dịch ngoài và các lọai phí, lệ phí nếu có phát sinh do bên B chịu), trung gian thanh toán qua Công ty Dreamhouse khi giao dịch môi giới thành công.</p>
                        <p>6.2. Nghĩa vụ của bên B: </p>
                        <p>a) Cung cấp đầy đủ và kịp thời cho bên A những giấy tờ liên quan.</p>
                        <p>b) Hợp tác với bên A trong quá trình thực hiện hợp đồng này.</p>
                        <p>c) Ký hợp đồng bán/cho thuê bất động sản trực tiếp với người mua/người thuê do bên B giới thiệu. Chịu tất cả các chi phí liên quan đến thủ tục mua bán bất động sản theo quy định của nhà nước hoặc theo thỏa thuận với người mua.</p>
                        <p>d) Thanh toán phí môi giới cho bên A theo Điều 2 của Hợp đồng;</p>
                        <p><b> ĐIỀU 7:  VI PHẠM HỢP ĐỒNG</b></p>
                        <p>7.1 Trường hợp bên B không thanh toán hoặc thanh toán không đủ hoặc không đúng phí môi giới cho bên B theo thỏa thuận tại Điều 2 của Hợp đồng này thì bên B phải chịu lãi chậm thanh toán trên số tiền và số ngày chậm thanh toán với lãi suất 2,5%/tháng. Việc chậm thanh toán hoặc thanh toán không đủ này cũng không vượt quá 10 (mười) ngày, nếu quá 10 (mười) ngày thì bên A được quyền đơn phương chấm dứt hợp đồng và bên B vẫn phải trả phí dịch vụ cho bên A như trong trường hợp bên A môi giới thành công.</p>
                        <p>7.2 Trường hợp bên A không tiến hành thực hiện dịch vụ hoặc thực hiện dịch vụ không đúng như đã thỏa thuận thì bên B có quyền đơn phương chấm dứt hợp đồng mà không phải trả cho bên A bất kỳ khoản phí nào đồng thời bên A phải trả cho bên B một khoản tiền phạt tương đương với số tiền phí thực hiện dịch vụ như quy định trong khoản 2.1 Điều 2 của Hợp đồng này.</p>
                        <p>7.3 Nếu một trong hai bên đơn phương chấm dứt hợp đồng trái với các thỏa thuận trong trong Hợp đồng này thì bên đơn phương chấm dứt hợp đồng đó phải chịu một khoản tiền phạt tương đương với số tiền phí dịch vụ như quy định trong khoản 2.1 Điều 2 của Hợp đồng này.</p>
                        <p><b> ĐIỀU 8:  ĐIỀU KHOẢN CHUNG</b></p>
                        <p>Các bên cam kết cùng nhau thực hiện hợp đồng. Nếu trong quá trình thực hiện có phát sinh vướng mắc các bên sẽ trao đổi trên tinh thần hợp tác, trường hợp hai bên không thỏa thuận được việc tranh chấp sẽ được phán quyết bởi tòa án.</p>
                        <p>Hợp đồng này có hiệu lực kể từ <b>{{ date('d/m/Y') }}</b> đến <b></b>.</p>
                        <p>Hợp đồng được lập thành 02 (hai) bản mỗi bên giữ một bản và có giá trị như nhau.</p>
                    <div>
                    <table style="border: 0; text-align: center; width: 100%">
                        <tr>
                            <td>
                                <b>ĐẠI DIỆN BÊN A</b>
                                <br>
                            </td>
                            <td width="20%">
                            </td>
                            <td>
                                <b>ĐẠI DIỆN BÊN B</b>
                                <br>
                            </td>
                        </tr>  
                    </table>
                </div>
            </div>
                <!-- <form action="" id="check_contract" method="get">
                    <input type="hidden" name="id_bds" value="{{ $bds->id }}">
                    <input type="hidden" name="id_kh"  value="{{ Auth::guard('customer')->user()->id }}">
                    <button class="btn south-btn m-1" style="width: 100%;" type="submit">Xác nhận</button>
                </form> -->
                <!-- <button onclick="submitAll();" class="btn south-btn m-1" style="width: 100%;" type="submit">Xác nhận</button> -->
        </div>
        <form action="{{ route('post.hopdong') }}" id="save_contract" method="POST">
            {{ csrf_field() }}
            <input type="hidden" name="id_bds" value="{{ $bds->id }}">
            <input type="hidden" name="id_kh"  value="{{ Auth::guard('customer')->user()->id }}">
            <input type="hidden" name="id_nv"  value="1">
            <input type="hidden" name="id_httt"  value="2">
            <input type="hidden" name="ten_hd"  value="Hợp đồng đặt cọc {{ $bds->ten_bds }}">
            <input type="hidden" name="giaban"  value="{{ $bds->gia }}">
            <input type="hidden" name="giathue"  value="đồng">
            <input type="hidden" name="phi_mg"  value="5.000.000">
            <input type="hidden" name="phi_dangbai"  value="đồng">
            <input type="hidden" name="huehong"  value="1">
            <input type="hidden" name="thoihanhopdong"  value="2020-12-31">
            <input type="hidden" name="ngaylaphd"  value="{{ date('Y-m-d') }}">
            <input type="hidden" name="status"  value="1">
            <div style="margin-bottom: 50px;">
                <button class="btn south-btn m-1" style="width: 40%;" type="submit">Đồng ý</button>
            </div>
        </form>
    </section>
    <!-- ##### Elements Area End ##### -->

    <!-- ##### Footer Area Start ##### -->
    @include('web.blocks.footer')
    <!-- ##### Footer Area End ##### -->
@endsection
@push('js')
    <script>
        // window.onload=function(){
        //     var auto = setTimeout(function(){ autoRefresh(); }, 100);

        //     function submitform(){
        //         alert('test');
        //         document.getElementById("save_contract").submit();
        //     }

        //     function autoRefresh(){
        //         clearTimeout(auto);
        //         auto = setTimeout(function(){ submitform(); autoRefresh(); }, 10000);
        //     }
        // }

        // function submitAll(){
        //     // document.getElementById("save_contract").submit();
        //     document.getElementById("check_contract").submit();
        // }

        function numberToEnglish(n, custom_join_character) {

        var string = n.toString(),
            units, tens, scales, start, end, chunks, chunksLen, chunk, ints, i, word, words;

        var and = custom_join_character || 'and';

        /* Is number zero? */
        if (parseInt(string) === 0) {
            return 'zero';
        }

        /* Array of units as words */
        units = ['', 'one', 'two', 'three', 'four', 'five', 'six', 'seven', 'eight', 'nine', 'ten', 'eleven', 'twelve', 'thirteen', 'fourteen', 'fifteen', 'sixteen', 'seventeen', 'eighteen', 'nineteen'];

        /* Array of tens as words */
        tens = ['', '', 'twenty', 'thirty', 'forty', 'fifty', 'sixty', 'seventy', 'eighty', 'ninety'];

        /* Array of scales as words */
        scales = ['', 'thousand', 'million', 'billion', 'trillion', 'quadrillion', 'quintillion', 'sextillion', 'septillion', 'octillion', 'nonillion', 'decillion', 'undecillion', 'duodecillion', 'tredecillion', 'quatttuor-decillion', 'quindecillion', 'sexdecillion', 'septen-decillion', 'octodecillion', 'novemdecillion', 'vigintillion', 'centillion'];

        /* Split user arguemnt into 3 digit chunks from right to left */
        start = string.length;
        chunks = [];
        while (start > 0) {
            end = start;
            chunks.push(string.slice((start = Math.max(0, start - 3)), end));
        }

        /* Check if function has enough scale words to be able to stringify the user argument */
        chunksLen = chunks.length;
        if (chunksLen > scales.length) {
            return '';
        }

        /* Stringify each integer in each chunk */
        words = [];
        for (i = 0; i < chunksLen; i++) {

            chunk = parseInt(chunks[i]);

            if (chunk) {

                /* Split chunk into array of individual integers */
                ints = chunks[i].split('').reverse().map(parseFloat);

                /* If tens integer is 1, i.e. 10, then add 10 to units integer */
                if (ints[1] === 1) {
                    ints[0] += 10;
                }

                /* Add scale word if chunk is not zero and array item exists */
                if ((word = scales[i])) {
                    words.push(word);
                }

                /* Add unit word if array item exists */
                if ((word = units[ints[0]])) {
                    words.push(word);
                }

                /* Add tens word if array item exists */
                if ((word = tens[ints[1]])) {
                    words.push(word);
                }

                /* Add 'and' string after units or tens integer if: */
                if (ints[0] || ints[1]) {

                    /* Chunk has a hundreds integer or chunk is the first of multiple chunks */
                    if (ints[2] || !i && chunksLen) {
                        words.push(and);
                    }

                }

                /* Add hundreds word if array item exists */
                if ((word = units[ints[2]])) {
                    words.push(word + ' hundred');
                }

            }

        }

        return words.reverse().join(' ');

        }
        var a = ['','một ','hai ','ba ','bốn ', 'năm ','sáu ','bảy ','tám ','chín ','mười ','mười một ','mười hai ','mười ba ','mười bốn ','mười lăm ','mười sáu ','mười bảy ','mười tám ','mười chín '];
        var b = ['', '', 'hai mươi','ba mươi','bốn mươi','năm mươi', 'sáu mươi','bảy mươi','tám mươi','chín mươi'];

        function inWords (num) {
            if ((num = num.toString()).length > 11) return 'overflow';
            n = ('00000000000' + num).substr(-11).match(/^(\d{2})(\d{2})(\d{2})(\d{1})(\d{2})$/);
            if (!n) return; var str = '';
            str += (n[1] != 0) ? (a[Number(n[1])] || b[n[1][0]] + ' ' + a[n[1][1]]) + 'crore ' : '';
            str += (n[2] != 0) ? (a[Number(n[2])] || b[n[2][0]] + ' ' + a[n[2][1]]) + 'lakh ' : '';
            str += (n[3] != 0) ? (a[Number(n[3])] || b[n[3][0]] + ' ' + a[n[3][1]]) + 'ngàn ' : '';
            str += (n[4] != 0) ? (a[Number(n[4])] || b[n[4][0]] + ' ' + a[n[4][1]]) + 'trăm ' : '';
            str += (n[5] != 0) ? (a[Number(n[5])] || b[n[5][0]] + ' ' + a[n[5][1]]) + 'đồng' : '';
            return str;
        }

        document.getElementById('number').onkeyup = function () {
            document.getElementById('words').innerHTML = inWords(document.getElementById('number').value);
        };
    </script>
@endpush


    
    
