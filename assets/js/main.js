function payment()
{
    var card_type = $('.card-type').val();
    var card_cost = $('.card-cost').val();
    var card_code = $('.card-code').val();
    var card_seri = $('.seri-code').val();
    if(!card_code.trim() || !card_type.trim() || !card_cost.trim() || !card_seri.trim())
    {
        swal("Lỗi", "Không được để trống !", "error");      
        return false;
    }
    else
    {
        $('.nap-tien').html('ĐANG XỬ LÝ');
        $.ajax({
            url:'http://localhost/shop/controller/controller.php',
            method:'POST',
            data:{
                'action':'payment',
                'card_type':card_type,
                'card_cost':card_cost,
                'card_code':card_code,
                'card_seri':card_seri
            },
            success:function(data)
            {
                $('.nap-tien').html('NẠP TIỀN');
                $('.alert').html(data);              
            }
        });
    }
}
function buyThisAcc(ele)
{
    swal({
        title: "Xác nhận mua tài khoản #"+ele,
        text: "Sau khi mua xong có thể xem thông tin đăng nhập tại lịch sử giao dịch, tiếp tục muốn mua ?",
        icon: "warning",
        buttons:{
            cancel: "HỦY",
            confirm: "TÔI ĐỒNG Ý",
        },
        dangerMode: true,
      })
      .then((willDelete) => {
        if (willDelete) {
          swal(
              $.ajax({
                url:'http://localhost/shop/controller/controller.php',
                method:'POST',
                data:{
                    'action':'buyThisAcc',
                    'productId':ele
                },
                success:function(data)
                {
                    $('.alert').html(data);
                }
              }),
            {
            icon: "success",
          });
        }
    });
}
function buyThisAccATM(ele,id)
{
    swal({
        title: "Xác nhận mua tài khoản #"+ele,
        text: "Để mua tài khoản này qua ATM xin vui lòng liên hệ Admin bằng mã giao dịch, tiếp tục lấy mã giao dịch ?",
        icon: "warning",
        buttons:{
            cancel: "HỦY",
            confirm: "TÔI ĐỒNG Ý",
        },
        dangerMode: true,
      })
      .then((willDelete) => {
        if (willDelete) {
          if(id !== 1)
          {
            swal("Thành công", "Mã giao dịch của bạn là : MSACC-100229012"+ele+"-"+id, "success");
          }
          else
          {
            swal('Lỗi', 'Bạn phải đăng nhập để thực hiện chức năng này !', 'error');
          }
        }
    });
}
function viewAcc(acc)
{
    if(!acc.trim())
    {
        swal("Lỗi", "Không có thông tin về tài khoản này !", "error");      
        return false;
    }
    else
    {
        $.ajax({
            url:'http://localhost/shop/controller/controller.php',
            method:'POST',
            data:{
                'action':'viewAcc',
                'acc':acc
            },
            success:function(data)
            {
                $('.alert').html(data);
            }
        });
    }
}
function search()
{
    var rank = $('.acc-rank').val();
    var cost = $('.acc-cost').val();
    var champ = $('.slchamp').val();
    var gold = $('.gold-ipt').val();
    if(!rank.trim() && !cost.trim() && !champ.trim() && !gold.trim())
    {
        swal('Lỗi', 'Chưa phân mục tìm kiếm !', 'error');
        return false;
    }
    else
    {
        $('.data-load').html('<div class="hollow-dots-spinner" :style="spinnerStyle"><div class="dot"></div><div class="dot"></div><div class="dot"></div></div>');
        $.ajax({
            url:'http://localhost/shop/controller/controller.php',
            method:'POST',
            data:{
                'action':'search',
                'rank':rank,
                'cost':cost,
                'champ':champ,
                'gold':gold
            },
            success:function(data)
            {
                $('.pagnation').hide();
                $('.pagnation').addClass('remove');
                setTimeout(function(){
                    $('.data-load').html(data);
                    $('html, body').animate({
                        scrollTop: $("div.searching").offset().top
                    }, 1300);
                },2000);
            }
        })
    }
}
function deleteSearch()
{
    if($('.pagnation').hasClass('remove')){
        load_page(1);
        $('.pagnation').show();
        $('.pagnation').removeClass('remove');
        $('.acc-rank').val('');
        $('.acc-cost').val('');
        $('.slchamp').val('');
        $('.gold-ipt').val('');
    }
    else{
        swal('Lỗi', 'Không có gì để xóa !', 'error');
    }
}