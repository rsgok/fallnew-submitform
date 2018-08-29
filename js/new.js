// //upload part
// UIkit.upload('.js-upload', {

//         url: '../../uploads/fallnew/',
//         multiple: false,
//         mime:"image/*",

//         beforeSend: function () {
//             console.log('beforeSend', arguments);
//         },
//         beforeAll: function () {
//             console.log('beforeAll', arguments);
//         },
//         load: function (e) {
//             console.log('load', arguments);
//         },
//         error: function () {
//             console.log('error', arguments);
//         },
//         complete: function () {
//             console.log('complete', arguments);
//         },

//         loadStart: function (e) {
//             console.log('loadStart', arguments);
//         },

//         progress: function (e) {
//             console.log('progress', arguments);
//         },

//         loadEnd: function (e) {
//             console.log('loadEnd', arguments);
//             console.log('name',name);
//         },

//         completeAll: function () {
//             console.log('completeAll', arguments);

            

//             UIkit.notification({
//                 message: '上传图片成功!',
//                 status: 'success',
//                 pos: 'top-center',
//                 timeout: 2000
//             });
            

//         },
//         fail:function(){
//             UIkit.notification({
//                 message: '上传图片失败，请检查图片格式和大小!',
//                 status: 'danger',
//                 pos: 'top-center',
//                 timeout: 3000
//             });
//         }

//     });

function openpanel() {
    var nowsrc=$('#portrait').attr('src')
    UIkit.lightboxPanel({
       items: [
       {source: nowsrc, caption: 'view it!', type: 'image'}
       ]
    }).show();
}

$(document).ready(function() {
    //show department introduction
    $('input[type=radio][name=radioforfirst],input[type=radio][name=radioforsec]').change(function() {
        if (this.value == '办公室') {
            UIkit.offcanvas('#offcanvas-bgs').show();
        }
        else if (this.value == '对外拓展部') {
            UIkit.offcanvas('#offcanvas-wt').show();
        }
        else if (this.value == '技术推广部') {
            UIkit.offcanvas('#offcanvas-jt').show();
        }
        else if (this.value == '兼职管理部') {
            UIkit.offcanvas('#offcanvas-jg').show();
        }
        else if (this.value == '品牌公关部') {
            UIkit.offcanvas('#offcanvas-pg').show();
        }
        else if (this.value == '人力资源部') {
            UIkit.offcanvas('#offcanvas-rz').show();
        }
        else if (this.value == '创业实践指导部') {
            UIkit.offcanvas('#offcanvas-cz').show();
        }

        if (this.name=="radioforfirst") {
            if (this.value=='技术推广部') {
                $("#jtchoicebox1").removeClass("uk-invisible")
            }else{
                $("#jtchoicebox1").addClass("uk-invisible")
            }
        }
        if (this.name=="radioforsec") {
            if (this.value=='技术推广部') {
                $("#jtchoicebox2").removeClass("uk-invisible")
            }else{
                $("#jtchoicebox2").addClass("uk-invisible")
            }
        }
    });

    $('#uploadfile').change(function(){
        var files = this.files[0];
        if(window.FileReader){//检测浏览器对FileReader的支持
            var filereader = new FileReader();
            filereader.readAsDataURL(files);//调用FileReader对象的方法
            filereader.onloadend = function(e){
                $('#portrait').attr('src',e.target.result)
                $('#portrait').removeClass("uk-invisible")
                UIkit.notification({
                    message: '上传图片成功!',
                    status: 'success',
                    pos: 'top-center',
                    timeout: 2000
                });
                UIkit.lightboxPanel({
                   items: [
                   {source: e.target.result, caption: 'view it!', type: 'image'}
                   ]
                }).show();
            }
        }
    })

    $("#submitbutton").click(function() {
        captword = $("#captcha").val();
        $.post("http://qcw.zju.edu.cn/trynew/vaildcode",
        {
          captcha: captword
        },
        function(data,status){
          if (data == "true"){
            if ($("#uploadfile").val()==''){
                UIkit.notification({
                    message: '请先上传个人照片!',
                    status: 'danger',
                    pos: 'top-center',
                    timeout: 3000
                });
                return false;
            }
            var flag=true;
            $(".mustfill").each(function(){
                if($(this).val()=="") {
                    flag=false;
                }
            })
            if (flag) {
                $("#submitform").bootstrapValidator('validate');//提交验证
                if ($("#submitform").data('bootstrapValidator').isValid()) {//获取验证结果，如果成功，执行下面代码
                    console.log("yes");
                    $("#submitform").submit(); 
                }else{
                    console.log("no");
                }
            }
            else {
                UIkit.notification({
                    message: '请先将表单填写完整!',
                    status: 'danger',
                    pos: 'top-center',
                    timeout: 3000
                });
            }
          }
          else{
            UIkit.notification({
                    message: '验证码错误!',
                    status: 'danger',
                    pos: 'top-center',
                    timeout: 2000
                });
            $.post("http://qcw.zju.edu.cn/trynew/codecreate/renew",
            {
                captcha: "1"
            },
            function(data,status){
                $("#vaildpic").attr("src",data);
            })
          }
        });               
    })
});

$(function() {
  $('#submitform').bootstrapValidator({
    submitButtons: '#submitbutton',
    message: '表单填写出现了小问题喔',
    fields: {
        name: {
            validators: {
                notEmpty: {
                    message: '请填写您的姓名'
                },
                stringLength: {
                    max: 15,
                    message: '名字可否短些?'
                }
            }
        },
        gender: {
            validators: {
                callback: {
                   message: '只有三种选项喔:男/女/双性',
                   callback:function(value, validator,$field){
                      return value=='男' || value=='女' || value=='双性'; 
                   }
                }
            }
        },
        studynum: {
            validators: {
                notEmpty: {
                    message: '请填写您的学号'
                },
                stringLength: {
                    max: 15,
                    message: '请填写正确的学号'
                },
                regexp: 
                {
                    regexp: /^[0-9]+$/,
                    message: '请填写正确的学号'
                }
            }
        },
        address: {
            validators: {
                notEmpty: {
                    message: '请填写你的籍贯'
                },
                stringLength: {
                    max: 15,
                    message: '请勿超过15个字'
                }
            }
        },
        classnum: {
            validators: {
                notEmpty: {
                    message: '请填写你的行政班级'
                },
                stringLength: {
                    max: 15,
                    message: '请勿超过15个字'
                }
            }
        },
        dorm: {
            validators: {
                notEmpty: {
                    message: '请填写你的寝室'
                },
                stringLength: {
                    max: 15,
                    message: '请勿超过15个字'
                }
            }
        },
        mobilenum: {
            validators: {
                notEmpty: {
                    message: '请填写你的手机号'
                },
                stringLength: {
                    min: 11,
                    max: 11,
                    message: '(重要)请填写11位有效手机号'
                }
            }
        },
        qqnum: {
            validators: {
                notEmpty: {
                    message: '请填写你的QQ号'
                },
                stringLength: {
                    max: 15,
                    message: '请填写有效QQ号'
                },
                regexp: 
                {
                    regexp: /^[0-9]+$/,
                    message: '请填写有效QQ号'
                }
            }
        },
        wxnum: {
            validators: {
                notEmpty: {
                    message: '请填写你的weixin号'
                },
                stringLength: {
                    max: 30,
                    message: '请填写有效weixin号'
                }
            }
        },
        emailaddr: {
            validators: {
                notEmpty: {
                    message: '请填写你的email'
                },
                stringLength: {
                    max: 100,
                    message: 'email请不要超过100个字符'
                },
                emailAddress: {
                    message: '请输入正确的邮件地址如：ilovepapic@foxmail.com'
                }
            }
        }
    }
  });
  $("#vaildpic").click(function(){
    $.post("http://qcw.zju.edu.cn/trynew/codecreate/renew",
        {
            captcha: "1"
        },
        function(data,status){
            $("#vaildpic").attr("src",data);
            console.log(data);
        }
    )
  });
});