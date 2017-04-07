function MK_check_bytes(str) {
    var l = 0;
    for (var i=0; i<str.length; i++) l += (str.charCodeAt(i)  > 128) ? 2 : 1;
    return l;
}

// 문자열 자르기
function cutchar(str, len) {
    //var str = this;
    var s = 0;
    if (str == '') return '';

    if (typeof str == 'undefined') {
        str = 0;
    }
    for (var i=0; i < str.length; i++) {
        s += (str.charCodeAt(i) > 128) ? 2 : 1;
        if (s > len) return str.substring(0, i) + "...";
    }
    return str;
}

function number_format(numid){
     var numstr = document.getElementById(numid).value;
     numstr = numstr.replace(/(,)/g,'');
     document.getElementById(numid).value = numstr.replace(/(\d)(?=(?:\d{3})+(?!\d))/g,'$1,');
}

function strip_tags(str, allow) {
    allow = (((allow || "") + "").toLowerCase().match(/<[a-z][a-z0-9]*>/g) || []).join('');

    var tags = /<\/?([a-z][a-z0-9]*)\b[^>]*>/gi;
    var commentsAndPhpTags = /<!--[\s\S]*?-->|<\?(?:php)?[\s\S]*?\?>/gi;
    return str.replace(commentsAndPhpTags, '').replace(tags, function (val0, val1) {
        return allow.indexOf('<' + val1.toLowerCase() + '>') > -1 ? val0 : '';
    });
}
function set_storage(key, value) {
    try {
        return sessionStorage.setItem(key, value);
    } catch (e) {
        return false;
    }
};
function get_storage(key) {
    try {
        return sessionStorage.getItem(key);
    } catch (e) {
        return false;
    }
};
function power_review_authimg(display) {
    if (display == 'block') {
        var passuid = '';
        if (typeof document.prw_form.authid != 'undefined') passuid = document.prw_form.authid.value;
        jQuery.ajax({
            type: 'POST',
            url: '/shop/authimg.html',
            dataType: 'html',
            async: false,
            data: {
                'passuid': passuid,
                'acmethod': 'power_review_submit',
                'formname': 'prw_form'
            },
            success: function(req) {
                var _x = (document.prw_form.offsetWidth / 2) - 155;
                var _y = (document.prw_form.offsetHeight / 2) - 50;
                jQuery('#authimgdiv').css({
                    'display': display,
                    'left': _x + 'px',
                    'top': _y + 'px'
                }).html(req);
            }
        });
        return false;
    }
    if (display == 'none') {
        document.prw_form.authtext.value = '';
        document.prw_form.authid.value = '';
        jQuery('#authimgdiv').hide();
    }
}
function power_review_authimg_mobile(display) {
    if (display == 'block') {
        var passuid='';
        var pars = 'passuid=' + passuid + '&acmethod=send&used_confirm_btn=Y&r='+Math.random();
        jQuery.ajax({
            type: 'POST',
            url: '/m/authimg.html',
            dataType: 'html',
            async: false,
            data: {
                'passuid': passuid,
                'acmethod': 'power_review_submit',
                'formname': 'pr_agrre',
                'used_confirm_btn': 'Y',
                'r': Math.random()
            },
            success: function(res) {
                var _x = (document.prw_form.offsetWidth / 2) - 155;
                jQuery('#authimgdiv').css({
                    'display': display
                }).html(res);
            }
        });
    }
    if (display == 'none') {
        document.prw_form.authtext.value = '';
        document.prw_form.authid.value = '';
        jQuery('#authimgdiv').hide();
    }
}
(function($) {
    window.power_review_pack = {
        info: {
            page_type   : '',
            config      : null,
            ordernum    : '',
            myordernum    : '',
            product_uid   : '',
            order_count : 0,
            order_key : 0,
            stand : null,
            list_lodding : false,
            list_first : true,
            location_dir : '/shop/'
        },
        set_page: function(page, config) {
           this.info.page_type = page; 
           this.info.config = config;
           this.info.location_dir = config.mobile_use == 1 ? '/m/' : '/shop/';
        },
        get_page: function() {
           return this.info.page_type;
        }
    }
    window.power_review_write = {
        init : function (action) {
            var config = power_review_pack.info.config;
            var page_type = power_review_pack.get_page();
            var _this = this;
            var _box , _form, _select_box, _content_box;

            if (action === 'update') {
                _box = $('#updatePowerReview');
                _form = $('#pru_form', _box);
            } else {
                _box = $('#writePowerReview');
                _form = $('#prw_form', _box);
            }
            
            config.board_auth_write_detail = config.board_auth_write;
            if (config.board_auth_write == 'A' && config.board_review_write_type != 'NONE') {
                if (action != 'update' && page_type == 'product') {
                    config.board_auth_write_detail = 'M';
                }
            }

            // TEXT AREA CLEAR
            if (action != 'update') {
                $('textarea[name=content]', _form).on({ 
                    "focus" : function() {
                        if (config.is_login === false && config.board_auth_write_detail != 'A') {
                            this.blur();
                            if (confirm("회원만 리뷰입력이 가능합니다.\n로그인 하시겠습니까?")) {
                                document.location.href='/shop/member.html?type=shopdetail&branduid=' + config.product_uid;
                            }
                            return false;
                        }
                        var _box_w = $('#writePowerReview');
                        if ($('.pr-options', _box_w)) {
                            if (config.board_code == 'rptkd87_board2') {
                                $('.pr-options', _box_w).show();
                            } else {
                                $('.pr-options', _box_w).slideDown();
                            }
                        }
                        if (config.board_add_clearw  == 'Y') {
                            if ($(this).val() == $('textarea[name=board_writeword]', _form).val()) {
                                $(this).val('');
                            }
                        }
                    }, 
                    "blur" : function() {
                        if (config.board_add_clearw  == 'Y') {
                            if ($(this).val().length == 0) {
                                $(this).val($('textarea[name=board_writeword]', _form).val());
                            }
                        }
                    }, 
                    "paste cut change keypress" : function() {
                        var str = strip_tags($(this).val()).replace(/&nbsp;/gi, ' ').replace(/&amp;/gi, '&').replace(/ /g, '').replace(/\n/g, '');
                        $('#PR_CONTENT_LENGTH').html(str.length);
                        if (page_type == 'product' && config.template_page_type !== '1') {
                            _content_box = this;
                            
                            setTimeout( function() {
                                $('textarea[name=content]', _form).css('height', 'auto' );
                                $('textarea[name=content]', _form).height( (_content_box.scrollHeight > 100 ? _content_box.scrollHeight : 100));
                            }, 10);
                        }
                    }, 
                    "keyup" : function() {
                        var str = strip_tags($(this).val()).replace(/&nbsp;/gi, ' ').replace(/&amp;/gi, '&').replace(/ /g, '').replace(/\n/g, '');
                        $('#PR_CONTENT_LENGTH').html(str.length);
                    } 
                });
            } else {
                var str = strip_tags($('textarea[name=content]', _form).val()).replace(/&nbsp;/gi, ' ').replace(/&amp;/gi, '&').replace(/ /g, '').replace(/\n/g, '');
                $('#PR_UPDATE_CONTENT_LENGTH').html(str.length);
                $('textarea[name=content]', _form).on({ 
                    "paste cut change keypress" : function() {
                        var str = strip_tags($(this).val()).replace(/&nbsp;/gi, ' ').replace(/&amp;/gi, '&').replace(/ /g, '').replace(/\n/g, '');
                        $('#PR_UPDATE_CONTENT_LENGTH').html(str.length);
                    }, 
                    "keyup" : function() {
                        var str = strip_tags($(this).val()).replace(/&nbsp;/gi, ' ').replace(/&amp;/gi, '&').replace(/ /g, '').replace(/\n/g, '');
                        $('#PR_UPDATE_CONTENT_LENGTH').html(str.length);
                    } 
                });
            }

            // 별점 열기 
            $('.star-list > a', _box).on('click', function(e) {
                e.preventDefault();
                $(this).closest('table').find('.star-list').css('z-index', '1');
                $(this).closest('.star-list').css('z-index', '10');
                $(this).siblings('ul').show();
                _this.selectbox_action($('.star-list', _box));

            });
            // 별점 선택/닫기
            $('.star-list ul li a', _box).on('click', function(e) {
                e.preventDefault();
                $('html').unbind('mousedown.modostar');
                $('.star-list', _box).unbind('mouseenter');
                $('.star-list', _box).unbind('mouseleave');
                
                var star_key = $(this).closest('.star-list').attr('star_key');
                if (!star_key) {
                    star_key = 1;
                }

                $('input[name=score' + star_key + ']', _form).val($('em', $(this)).html().length);
                $('> a', $(this).closest('.star-list')).html($(this).html());
                $(this).parent('li').parent('ul').hide();
            });

            if (config.mobile_use == 1) {
                $('.multi-score .sel-star > a', _box).on('click', function(e) {

                    var star_key = $(this).parent().attr('star_key');                    
                    var score = parseInt($(this).attr('score'));
                    $.each($(this).parent().children('a'), function() {
                        if (parseInt($(this).attr('score')) <= score) {
                            $(this).addClass('selected')
                        } else {
                            $(this).removeClass('selected')
                        }
                    });
                    $(this).parent().siblings('.txt').html($(this).attr('title'));
                    $('input[name=score' + star_key + ']', _form).val($(this).attr('score'));
                });
            }

            if (action != 'update') {
                // 리뷰 혜택 열기/닫기 
                $('.lnk-benefit', _box).on('mouseenter', function() {
                    $(this.hash).show();
                }).on('mouseleave', function() {
                    $(this.hash).hide();
                }).on('click', function(e) {
                    e.preventDefault();
                });
            } else {
                // 수정 레이어팝업 닫기 
                $('.close-layer', _box).on('click', function(e) {
                    e.preventDefault();
                    $(this.hash).hide();
                });
           }
            
            if (page_type == 'product' && config.template_page_type != '3') {
                if (config.template_page_type == '2') {
                    if ($('#powerReview .PR15N01-info').outerWidth() < 900) {
                        $('#powerReview .PR15N01-info').css('padding-right', '296x');
                        $('#powerReview .PR15N01-info .photo').css('width', '291px');
                    } else {
                        $('#powerReview .PR15N01-info').css('padding-right', '393px');
                        $('#powerReview .PR15N01-info .photo').css('width', '388px');
                    }
                } else {
                    if ($('#powerReview .info').outerWidth() < 900) {
                        $('#powerReview .info').css('padding-right', '263px');
                        $('#powerReview .info .photo').css('width', '258px');
                    } else {
                        $('#powerReview .info').css('padding-right', '349px');
                        $('#powerReview .info .photo').css('width', '344px');
                    }
                }
            }
            
            var fkey = 0;
            if (action == 'update') {
                if ($('input[name="old_file_name[]"]', _form) && $('input[name="old_file_name[]"]', _form).length > 0) {
                    fkey = $('input[name="old_file_name[]"]', _form).length - 1;
                }

                var f_count = $('input[name="old_file_name[]"]', _form) ? $('input[name="old_file_name[]"]', _form).length : 0;
                if (f_count < parseInt(config.board_attach_cnt)) {
                    $('.file-attach', _box).show();
                    if (page_type == 'product' && config.template_page_type !== '1') {
                        $('.pr-lnk-photo', _box).attr('href', '#none');
                    }
                } else {
                    $('.file-attach', _box).hide();
                    if (page_type == 'product' && config.template_page_type !== '1') {
                        $('.pr-lnk-photo', _box).attr('href', 'javascript:power_review_file_error();');
                    }
                }
            }
        
            var _ing_file = false;
            if (config.is_login === true || config.board_auth_write_detail == 'A') {
                var _fname = action == 'update' ? '#fileupload_update' : '#fileupload';
                $(_fname, _box).fileupload({
                        url: config.board_host+'/upload.power_review.html',
                        type: 'POST',
                        forceIframeTransport: true,
                        redirect:'http://'+config.shopurl+'/shop/power_review_file_result.html',
                        dataType:'json',
                        start:function (e, data) {
                            _ing_file = true;
                        },
                        done: function (e, data) {
                            var d = data.result;
                            if (d && d.result === true && d.file_name && d.file_name.length > 0) {
                                fkey++;

                                _form.append('<input type="hidden" name="file_name[]" fkey="' + fkey + '" value="' + d.file_name + '">');
                                var _img_path = config.board_host + '/board/tmp/'+ config.file_board_code + ':mini::' + d.file_name; 

                                if (page_type == 'product' && config.template_page_type !== '1') {
                                    $('.thumb-wrap', _box).append('<a class="img btn-file-del cvr" fkey="' + fkey + '" href="javascript:power_review_del_file(\'' + action + '\', \'' + fkey + '\');"><span class="cover"></span><span class="cover-txt">삭제</span><img src="'+_img_path+'" alt="" /></a>');
                                } else if (config.mobile_use == 1) { 
                                    $('.file-attach', _box).after('<div class="btn-file-del cvr" fkey="' + fkey + '"><img class="bg" src="'+_img_path+'"><a class="cover" href="javascript:power_review_del_file(\'' + action + '\', \'' + fkey + '\');"><span>삭제</span></a></div>');
                                } else {
                                    $('.file-attach', _box).before('<div class="btn-file-del cvr" fkey="' + fkey + '"><img class="bg" src="'+_img_path+'"><a class="cover" href="javascript:power_review_del_file(\'' + action + '\', \'' + fkey + '\');"><span>삭제</span></a></div>');

                                }
                                var f_count = $('input[name="file_name[]"]', _form) ? $('input[name="file_name[]"]', _form).length : 0;

                                if (action == 'update') {
                                    f_count += $('input[name="old_file_name[]"]', _form) ? $('input[name="old_file_name[]"]', _form).length : 0;
                                }
                                if (f_count < parseInt(config.board_attach_cnt)) {
                                    $('.file-attach', _box).show();
                                    if (page_type == 'product' && config.template_page_type !== '1') {
                                        $('.pr-lnk-photo', _box).attr('href', '#none');
                                    }
                                } else {
                                    $('.file-attach', _box).hide();
                                    if (page_type == 'product' && config.template_page_type !== '1') {
                                        $('.pr-lnk-photo', _box).attr('href', 'javascript:power_review_file_error();');
                                    }
                                }

                            } else {
                                if (d && d.msg && d.msg.length > 0) {
                                    var msg = d.msg.replace(/\+/gi, ' ');
                                    alert(msg);
                                } else {
                                    alert("파일 업로드에 실패 했습니다. 다시 시도해 주세요.");
                                }
                            }
                            _ing_file = false;
                        }
                });
            } else {
                $('#fileupload').on('click', function(e) {
                    this.blur();
                    if (confirm("회원만 리뷰입력이 가능합니다.\n로그인 하시겠습니까?")) {
                        document.location.href='/shop/member.html?type=shopdetail&branduid=' + config.product_uid;
                    }
                    return false;
                });
            }

            var prw_ing = false;
            _form.submit(function() {
                var _form = $(this);
                var _box_w = $('#writePowerReview');
                if (config.is_login === false  && config.board_auth_write_detail != 'A') {
                    this.blur();
                    if (confirm("회원만 리뷰입력이 가능합니다.\n로그인 하시겠습니까?")) {
                        document.location.href='/shop/member.html?type=shopdetail&branduid=' + config.product_uid;
                    }
                    return false;
                }
                if (config.is_login === false && config.board_auth_write == 'A') {
                    if ($('input[name=hname]', _form).val().length == 0) {
                        alert("이름을 입력해 주세요.");                        
                        $('input[name=hname]', _form).focus();
                        return false;
                    }
                    if (action != 'update') {
                        if ($('input[name=passwd]', _form).val().length == 0) {
                            alert("비밀번호를 입력해 주세요.");                        
                            $('input[name=passwd]', _form).focus();
                            return false;
                        }
                    }
                    if (action != 'update') {
                        if ($('input[name=privercy_agree]', 'form[name=pr_agrre]') && $('input[name=privercy_agree]', 'form[name=pr_agrre]').length > 0) {
                            if ($("input[name='privercy_agree']:checked'", 'form[name=pr_agrre]').val() !== 'Y') {
                                alert("개인정보 수집.이용에 동의하신 후에 작성하실 수 있습니다.");
                                return false;
                            }
                        }
                    }
                }
                if (config.board_code == 'rptkd87_board2') {
                    $('.pr-options', _box_w).show();
                } else {
                    $('.pr-options', _box_w).slideDown();
                }
                if (config.board_add_clearw  == 'y') {
                    if ($(this).val() == $('textarea[name=board_writeword]', _form).val()) {
                        $(this).val('');
                    }
                }
                if (_ing_file == true) {
                    alert("파일을 업로드 중입니다. 잠시 후 다시 시도해 주세요.");
                    return false;
                }
                if (prw_ing === true) {
                    alert("리뷰를 작성 중입니다. 잠시만 기다려 주세요!");
                    return false;
                }
                prw_ing = true;
                if (config.board_add_clearw  == 'Y' && action != 'update') {
                    if ($('textarea[name=content]', _form).val() == $('textarea[name=board_writeword]', _form).val()) {
                        $('textarea[name=content]', _form).val('');
                    }
                }
                $.each($('input.pr-add-data', _form), function() {
                    if ($(this).attr('req') == 'Y' && $(this).attr('intype') == 'text') {
                        if ($(this).val().length == 0) {
                            alert($(this).attr('title') + '를(을) 입력해 주세요.');
                            $(this).focus();
                            prw_ing = false;
                            return false;
                        }
                        if ($(this).attr('intype').length > 0 && $(this).val().length > $(this).attr('limit')) {
                            alert($(this).attr('title') + '를(을) ' + $(this).attr('limit') + '자 이내로 입력해 주세요.');
                            $(this).focus();
                            prw_ing = false;
                            return false;
                        }
                    }
                    if ($(this).attr('intype') == 'checkbox') {
                        if ($(this).attr('req') == 'Y') {
                            if ($('input.pr_add_check_' + $(this).attr('aidx')+':checked', _form).length === 0) {
                                alert($(this).attr('title') + '를(을) 선택해 주세요.');
                                $(this).focus();
                                prw_ing = false;
                                return false;
                            }
                        }
                        var _cval = [];
                        $.each($('input.pr_add_check_' + $(this).attr('aidx')+':checked', _form), function() {
                            _cval.push($(this).val());
                        }); 
                        $(this).val(_cval.join(','));
                    }

                    if ($(this).attr('intype') == 'radio') {
                        if ($(this).attr('req') == 'Y') {
                            if ($('input[name="add_data[' + $(this).attr('aidx') + ']"]'+':checked', _form).length === 0) {
                                alert($(this).attr('title') + '를(을) 선택해 주세요.');
                                $(this).focus();
                                prw_ing = false;
                                return false;
                            }
                        }
                    }
                });
                if (prw_ing === false) {
                    return false;
                }
                $.each($('select.pr-add-data', _form), function() {
                    if ($(this).attr('req') == 'Y' && $(this).attr('intype') == 'select') {
                        if ($(this).val().length == 0) {
                            alert($(this).attr('title') + '를(을) 선택해 주세요.');
                            $(this).focus();
                            prw_ing = false;
                            return false;
                        }
                    }
                });
                if (prw_ing === false) {
                    return false;
                }
                if ($('textarea[name=content]', _form).val().length === 0) {
                    alert("리뷰를 입력해 주세요.");
                    if ($('textarea[name=content]', _form).val().length == 0 && action != 'update') {
                        $('textarea[name=content]', _form).val($('textarea[name=board_writeword]', _form).val());
                    }
                    $('textarea[name=content]', _form).focus();
                    prw_ing = false;
                    return false;
                }

                var min_size = parseInt(config.board_min_length);
                if (_this.check_length(min_size, $('textarea[name=content]', _form).val()) === false) {
                    alert('리뷰는 ' + min_size + '글자 이상 입력하셔야 합니다.');
                    if ($('textarea[name=content]', _form).val().length == 0 && action != 'update') {
                        $('textarea[name=content]', _form).val($('textarea[name=board_writeword]', _form).val());
                    }
                    prw_ing = false;
                    return false;
                }
                var f_count = $('input[name="file_name[]"]', _form) ? $('input[name="file_name[]"]', _form).length : 0;
                if (action == 'update') {
                    f_count += $('input[name="old_file_name[]"]', _form) ? $('input[name="old_file_name[]"]', _form).length : 0;
                }
                if (config.board_photo_review_type == 'Y' && f_count == '0') {
                    alert('리뷰등록 시, 포토리뷰 등록은 필수입니다\n첨부파일을 등록해주시기 바랍니다.');
                    prw_ing = false;
                    return false;
                }
                if (action != 'update' && config.is_login === false && config.board_auth_write_detail == 'A') {
                    if (config.mobile_use == 1) {
                        if ($('#authimgdiv', '#writePowerReview') && $('#authimgdiv', '#writePowerReview').length > 0) {
                            if ($('input[name=authtext]', _form).length === 0) {
                                power_review_authimg_mobile('block');
                                prw_ing = false;
                                return false;
                            }
                        }
                        if ($('#authimgdiv', '#writePowerReview').length > 0 && $('input[name=authtext]', _form).val().length == 0) {
                            alert("자동입력방지 문구를 입력해 주세요."); 
                            $('textarea[name=authtext]', _form).focus();
                            prw_ing = false;
                            return false;
                        }
                    } else {
                        if ($('#authimgdiv', '#writePowerReview') && $('#authimgdiv', '#writePowerReview').length > 0) {
                            if ($('input[name=authtext]', _form).length === 0 || $('input[name=authtext]', _form).val().length == 0) {
                                power_review_authimg('block');
                                prw_ing = false;
                                return false;
                            }
                        }
                    }
                }
                if (action == 'update') {
                    var num1 = $('input[name=num1]', _form).val();
                    var num2 = $('input[name=num2]', _form).val();
                }
                $(this).ajaxSubmit({
                    type : 'POST',
                    url  : power_review_pack.info.location_dir + 'power_review_write.action.html',
                    dataType: 'json',
                    success : function(response) {
                        if (response.success === true) {

                            var clear_date = new Date(); 
                            var clear_time = clear_date.getTime();
                            set_storage('power_review_clear_time', clear_time);

                            $('.btn-file-del', _box).remove();
                            $('input[name="file_name[]"]', _form).remove();
                            $('textarea[name=content]', _form).val($('textarea[name=board_writeword]', _form).val());

                            if (config.is_login === false) {
                                $('input[name=passwd]', _form).val('');
                                if (action !== 'update' && $('#authimgdiv', '#writePowerReview') && $('#authimgdiv', '#writePowerReview').length > 0) {
                                    if (config.mobile_use == 1) {
                                        power_review_authimg_mobile('none');
                                    } else {
                                        power_review_authimg('none');
                                    }
                                }
                            }

                            $('.file-attach', _box).show();

                            config.ordernum = '';

                            if (action !== 'update') {
                                $.each($('input.pr-add-data', _form), function(_i, _d) {
                                    $(this).val('');
                                });
                                $.each($('select.pr-add-data', _form), function(_i, _d) {
                                    $(this).val('');
                                });
                                $.each($('.pr-add-check', _form), function(_i, _d) {
                                    $(this).attr("checked", false);
                                });
                                $('#PR_CONTENT_LENGTH').html('0');
                            } else {
                                $('#PR_UPDATE_CONTENT_LENGTH').html('0');
                            }
                            
                            if (page_type == 'pop_write' || page_type == 'mypage_write') {
                                power_review_main.change_product('', '');
                                alert(response.message);
                            }

                            if (page_type == 'product' || page_type == 'write' || page_type == 'update') {
                                if (action == 'update') {
                                    alert("수정되었습니다.");
                                    if (config.mobile_use == 1) {
                                        location.href = "/m/power_review_view.html?product_uid=" + config.product_uid + "&num1=" + num1+ "&num2=00000";
                                    } else {
                                        $('#layerReviewModify').hide();
                                        power_review_list.get_list('', '');
                                    }
                                } else {
                                    if (response.data.use_write == 'N') {
                                        $('#writePowerReview').hide();
                                    }
                                    if (config.mobile_use != 1) {
                                        power_review_list.get_list(1, '');
                                    }

                                    alert(response.message);


                                    // 모바일 후기 페이지로 이동
                                    if (config.mobile_use == 1) {
                                        location.href = "/m/power_review_product.html?product_uid=" + config.product_uid;
                                    }
                                }
                            }
                        } else {
                            if (action !== 'update' && config.is_login === false) {
                                if (config.mobile_use == 1) {
                                    if ($('#authimgdiv', '#writePowerReview') && $('#authimgdiv', '#writePowerReview').length > 0) {
                                        power_review_authimg_mobile('block');
                                    }
                                } else {
                                    if ($('#authimgdiv', '#writePowerReview') && $('#authimgdiv', '#writePowerReview').length > 0) {
                                        power_review_authimg('none');
                                    }
                                }
                            }
                            alert(response.message);
                        }
                        prw_ing = false;
                    }
                });
                return false;
            });
        },
        selectbox_action: function(_ob) {
            power_review_write._select_box = _ob;
            _ob.on('mouseleave', function(e) {
                $(this).unbind('mouseleave');

                $(this).on('mouseenter', function(e) {
                    $(this).unbind('mouseenter');
                    $("html").unbind('mousedown.modostar');
                    power_review_write.selectbox_action($(this));
                });                
                $("html").on('mousedown.modostar', function(e) {
                    $(this).unbind('mousedown.modostar');
                    power_review_write._select_box.unbind('mouseenter');
                    $('ul'