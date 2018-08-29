<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- base -->
    <base href ="<?php echo base_url("static/fallnew")."/";?>"/>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.bootcss.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- rating css -->
    <link href="https://cdn.bootcss.com/semantic-ui/2.3.1/components/rating.min.css" rel="stylesheet">
    <!-- UIkit CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-rc.10/css/uikit.min.css" />
    <!-- validator -->
    <link href="https://cdn.bootcss.com/jquery.bootstrapvalidator/0.5.3/css/bootstrapValidator.min.css" rel="stylesheet">
    <!--mycss-->
    <link rel="stylesheet" href="css/new.css" />

    <title>joinus</title>
  </head>
  <body>
    <div class="uk-offcanvas-content">
    <div id="mysvgbox" class="svgbox uk-align-center">
      
    </div>
    <div class="container">
      <div class="uk-align-center myimgtitlebox">
        <img class="" src="./static/title.png">  
      </div>
      
        <div class="row">
          <div class="col-md-3"></div>
          <div class="col-md-6">
            <form class="myform" action=<?php echo '"'.base_url().'joinus/submit"'?> method="post" id="submitform" enctype="multipart/form-data">
              <!-- column1 -->
              <div class="uk-margin row">
                <div class="col-md-3 m-auto">
                  <label class="mytipword">姓名</label>
                </div>
                <div class="col-md-9">                  
                  <input class="uk-input uk-border-rounded" type="text" name="name">  
                </div>
              </div>
              <div class="uk-margin row">
                <div class="col-md-3 m-auto">
                  <label class="mytipword">性别</label>
                </div>
                <div class="col-md-9">                  
                  <input class="uk-input uk-border-rounded" type="text" name="gender">  
                </div>
              </div>
              <div class="uk-margin row">
                <div class="col-md-3 m-auto">
                  <label class="mytipword">学号</label>
                </div>
                <div class="col-md-9">                  
                  <input class="uk-input uk-border-rounded" type="text" name="studynum">  
                </div>
              </div>
              <div class="uk-margin row">
                <div class="col-md-3 m-auto">
                  <label class="mytipword">籍贯</label>
                </div>
                <div class="col-md-9">                  
                  <input class="uk-input uk-border-rounded" type="text" name="address">  
                </div>
              </div>
              <div class="uk-margin row">
                <div class="col-md-3 m-auto">
                  <label class="mytipword">班级</label>
                </div>
                <div class="col-md-9">                  
                  <input class="uk-input uk-border-rounded" type="text" name="classnum">  
                </div>
              </div>
              <div class="uk-margin row">
                <div class="col-md-3 m-auto">
                  <label class="mytipword">寝室</label>
                </div>
                <div class="col-md-9">                  
                  <input class="uk-input uk-border-rounded" type="text" name="dorm">  
                </div>
              </div>
              <div class="uk-margin row">
                <div class="col-md-3 m-auto">
                  <label class="mytipword">手机</label>
                </div>
                <div class="col-md-9">                  
                  <input class="uk-input uk-border-rounded" type="text" name="mobilenum">  
                </div>
              </div>
              <div class="uk-margin row">
                <div class="col-md-3 m-auto">
                  <label class="mytipword">qq</label>
                </div>
                <div class="col-md-9">                  
                  <input class="uk-input uk-border-rounded" type="text" name="qqnum">  
                </div>
              </div>
              <div class="uk-margin row">
                <div class="col-md-3 m-auto">
                  <label class="mytipword">微信</label>
                </div>
                <div class="col-md-9">                  
                  <input class="uk-input uk-border-rounded" type="text" name="wxnum">  
                </div>
              </div>
              <div class="uk-margin row">
                <div class="col-md-3 m-auto">
                  <label class="mytipword">邮箱</label>
                </div>
                <div class="col-md-9">                  
                  <input class="uk-input uk-border-rounded" type="text" name="emailaddr">  
                </div>
              </div>
              <div class="uk-margin row">
                <div class="col-md-3 m-auto">
                  <label class="mytipword">照片</label>
                </div>
                <div class="col-md-9">  
                  <div class="js-upload" uk-form-custom>
                      <input id="uploadfile" type="file" name="imageFile">
                      <button id="uploadphoto" class="uk-button uk-button-primary" type="button">Select</button>
                  </div>
                </div>
              </div>
              <div class="uk-margin row">
                <div class="col-md-3">
                </div>
                <div class="col-md-9"> 
                  <img id="portrait" src="" width="100" onclick="openpanel()" class="uk-invisible">
                </div>
              </div>
              <!-- column2 -->
              <hr class="uk-margin-medium uk-divider-icon">
              <div class="tipbox">
                <p>以下问题选填，不作为最终录取的评判标准</p>
              </div>
              <div class="subtipbox">
                <p>如果你具有以下特长请在对应处选择：</p>
                <div class="uk-margin-top uk-grid-small uk-child-width-1-2 uk-grid greenfont">
                    <label><input class="uk-checkbox" type="checkbox" name="skill[]" value="摄影"> 摄影</label>
                    <label><input class="uk-checkbox" type="checkbox" name="skill[]" value="视频剪辑"> 视频剪辑</label>
                    <label><input class="uk-checkbox" type="checkbox" name="skill[]" value="微信推文制作"> 微信推文制作</label>
                    <label><input class="uk-checkbox" type="checkbox" name="skill[]" value="某类体育运动"> 某类体育运动</label>
                    <label><input class="uk-checkbox" type="checkbox" name="skill[]" value="网页制作"> 网页制作</label>
                    <label><input class="uk-checkbox" type="checkbox" name="skill[]" value="唱歌"> 唱歌</label>
                    <label><input class="uk-checkbox" type="checkbox" name="skill[]" value="主持"> 主持</label>
                    <label><input class="uk-checkbox" type="checkbox" name="skill[]" value="舞蹈"> 舞蹈</label>
                    <label><input class="uk-checkbox" type="checkbox" name="skill[]" value="器乐演奏"> 器乐演奏</label>
                    <label><input class="uk-checkbox" type="checkbox" name="skill[]" value="绘画"> 绘画</label>
                    <label><input class="uk-checkbox" type="checkbox" name="skill[]" value="书法"> 书法</label>
                    <label><input class="uk-checkbox" type="checkbox" name="skill[]" value="文案填写"> 文案填写</label>
                                    
                </div>
                <div class="uk-grid uk-margin-remove-top greenfont uk-grid-small uk-child-width-1-1">
                  <label><input class="uk-checkbox" type="checkbox" name="skill[]" value="图像处理（例如PS、AI）"> 图像处理（例如PS、AI）</label>    
                </div>
                <div class="uk-margin">
                      <textarea class="uk-textarea" rows="3" placeholder="如以上选项不包含请在此填写特长" name="skillplus"></textarea>
                </div>
              </div>
              <div class="tipbox">
                <p>以下问题必填</p>
              </div>
              
              <div class="subtipbox uk-margin-medium">
                <p>在以下这五个方面的能力中，你分别给自己打几分？</p>
                <input id="stars" class="uk-hidden" type="text" name="stars[]" value="0">
                <div class="uk-margin-medium-top uk-flex">
                  <p class="uk-width-1-4 greenfont boldfont">团队领导</p>
                  <div class="ui huge rating star" data-max-rating="5"></div>  
                </div>
                <div class="uk-margin uk-flex">
                  <p class="uk-width-1-4 greenfont boldfont">沟通交流</p>
                  <div class="ui huge rating star" data-max-rating="5"></div>  
                </div>
                <div class="uk-margin uk-flex">
                  <p class="uk-width-1-4 greenfont boldfont">创新思维</p>
                  <div class="ui huge rating star" data-max-rating="5"></div>  
                </div>
                <div class="uk-margin uk-flex">
                  <p class="uk-width-1-4 greenfont boldfont">寻求帮助</p>
                  <div class="ui huge rating star" data-max-rating="5"></div>  
                </div>
                <div class="uk-margin uk-flex">
                  <p class="uk-width-1-4 greenfont boldfont">任务执行</p>
                  <div class="ui huge rating star" data-max-rating="5"></div>  
                </div>
              </div>

              <div class="subtipbox">
                <p>请简述一段对你影响最大的经历，并谈谈你的收获。（学校生活、家庭生活或社会活动等皆可，请写明时间地点）</p>
                <div class="uk-margin">
                      <textarea class="uk-textarea mustfill" rows="5" placeholder="" name="exper"></textarea>
                </div>
              </div>
              <!-- column3 -->
              <hr class="uk-margin-medium uk-divider-icon" >
              <div class="subtipbox">
                <p>请在下列选项中<strong>至少选择一个</strong>你心仪的部门（注：若只有一个志愿，请在第二志愿下选择无;若有两个志愿，则请对两个部门<strong>分别填写</strong>）</p>
              </div>
              <div class="tipbox uk-margin">
                <p>第一志愿</p>
                <div class="uk-flex uk-flex-column">
                  <label><input class="uk-radio" type="radio" name="radioforfirst" value="办公室"> 办公室</label>
                  <label><input class="uk-radio" type="radio" name="radioforfirst" value="对外拓展部"> 对外拓展部</label>
                  <div class="uk-grid">
                      <div class="uk-width-1-2">
                        <lable class="greenfont"><input class="uk-radio" type="radio" name="radioforfirst" value="技术推广部" id="jtchoice1"> 技术推广部</lable>
                      </div>
                      <div class="uk-width-1-2 uk-invisible" id="jtchoicebox1">
                        <label class="jishuradio"><input class="uk-radio" type="radio" name="jishu1" value="美工组"> 美工组</label>
                        <label class="jishuradio"><input class="uk-radio" type="radio" name="jishu1" value="技术组"> 技术组</label>
                      </div>
                  </div>
                  <label><input class="uk-radio" type="radio" name="radioforfirst" value="兼职管理部"> 兼职管理部</label>
                  <label><input class="uk-radio" type="radio" name="radioforfirst" value="品牌公关部"> 品牌公关部</label>
                  <label><input class="uk-radio" type="radio" name="radioforfirst" value="人力资源部"> 人力资源部</label>
                  <label><input class="uk-radio" type="radio" name="radioforfirst" value="创业实践指导部"> 创业实践指导部</label>
                </div>
              </div>
              <div class="tipbox uk-margin">
                <p>第二志愿</p>
                <div class="uk-flex uk-flex-column">
                  <label><input class="uk-radio" type="radio" name="radioforsec" value="办公室"> 办公室</label>
                  <label><input class="uk-radio" type="radio" name="radioforsec" value="对外拓展部"> 对外拓展部</label>
                  <div class="uk-grid">
                      <div class="uk-width-1-2">
                        <lable class="greenfont"><input class="uk-radio" type="radio" name="radioforsec" value="技术推广部" id="jtchoice2"> 技术推广部</lable>
                      </div>
                      <div class="uk-width-1-2 uk-invisible" id="jtchoicebox2">
                        <label class="jishuradio"><input class="uk-radio" type="radio" name="jishu2" value="美工组"> 美工组</label>
                        <label class="jishuradio"><input class="uk-radio" type="radio" name="jishu2" value="技术组"> 技术组</label>
                      </div>
                  </div>
                  <label><input class="uk-radio" type="radio" name="radioforsec" value="兼职管理部"> 兼职管理部</label>
                  <label><input class="uk-radio" type="radio" name="radioforsec" value="品牌公关部"> 品牌公关部</label>
                  <label><input class="uk-radio" type="radio" name="radioforsec" value="人力资源部"> 人力资源部</label>
                  <label><input class="uk-radio" type="radio" name="radioforsec" value="创业实践指导部"> 创业实践指导部</label>
                  <label><input class="uk-radio" type="radio" name="radioforsec" value="无"> 无</label>
                </div>
              </div>
              <div class="subtipbox">
                <p>并用几句话谈谈你选择该部门的<strong>原因</strong>，以及你希望在该部门中得到的<strong>收获</strong>。</p>
                <div class="uk-margin">
                      <textarea class="uk-textarea mustfill" rows="5" placeholder="" name="aptreason"></textarea>
                </div>
              </div>
              <div class="subtipbox uk-margin-medium">
                <p>你是通过什么途径知道勤创纳新的？以及你选择勤创的理由是什么？</p>
                <div class="uk-margin">
                      <textarea class="uk-textarea mustfill" rows="3" placeholder=""  name="qcpath"></textarea>
                </div>
              </div>
              <div class="subtipbox">
                <p>你有什么话想对勤创说（比如期待）？请在下方用几句话简单表达。</p>
                <div class="uk-margin">
                      <textarea class="uk-textarea mustfill" rows="3" placeholder="" name="expect"></textarea>
                </div>
              </div>
              <!-- column4 -->
              <hr class="uk-margin" >
              <div class="uk-margin-medium validcodebox uk-flex uk-flex-between">
                <input type="text" id="captcha" class="uk-input uk-width-1-3">
                <?
                            $CI = & get_instance();
                            $imgcap = $CI->codecreate();
                            echo rtrim($imgcap['image'],'>').'id="vaildpic">';
                          ?>
              </div>
              <input type="button" value="提交" class="uk-width-1-1 uk-button uk-button-primary" id="submitbutton">
            </form>
          </div>
          <div class="col-md-3"></div>
        <div>

    </div>
    <footer class="uk-align-center">PAPIC@2018</footer>

    <!--for apartment introduction-->
    <div id="offcanvas-bgs" uk-offcanvas="mode: push;overlay: true">
        <div class="uk-offcanvas-bar">

            <button class="uk-offcanvas-close" type="button" uk-close></button>

            <h3>办公室</h3>

            <p>办公室掌管中心财务预算、结算信息汇总，在物资管理与借用中考验对细节的把控；办公室负责勤创内部微信公众平台运营：新人介绍、生日祝福、干货分享、活动介绍，赋予你施展才华的巨大空间。而在活动中，全员大会里熟络勤创新人，篮球赛汇集各大高手，当仁不让施展才华，年末趴体共同书写圣诞夜温情回忆………春夏学期，我们与你携手，搭建勤创十五周年纪念日庆典，策划浪漫迷人内部舞会，打造隆重温暖年会。在活动中不断提升组织能力、协调能力。</p>
            <strong>关键词</strong>
            <br>
            <span class="uk-label">家文化</span>
            <span class="uk-label">温暖</span>
            <span class="uk-label">纽带</span>
        </div>
    </div>
    <div id="offcanvas-wt" uk-offcanvas="mode: push;overlay: true">
        <div class="uk-offcanvas-bar">

            <button class="uk-offcanvas-close" type="button" uk-close></button>

            <h3>对外拓展部</h3>

            <p>对外拓展部，勤创中心最重要的外事部门之一。不仅拥有与校外商家企业密切联系的强大优势，且利用该项优势积极构建大学生与企业之间的桥梁，并取得了颇为丰硕的成果。同时，通过为勤创中心相关活动拉取赞助的方式，给予中心活动举办以强大的助力。对外拓展部是一个精英化的团队：工作中，我们强调挖掘个人主观能动性，注重个人价值的有效利用，以培养团队协作精神为目的，以创业创新的意识为核心，鼓励创新，支持突破；工作外，我们是一个充满温情的大家庭。在这里，我们褪去稚嫩，我们学会担当；我们突破自我，我们执着理想。在浙里，我们从单纯走向睿智。在勤创，我们从轻狂走向成熟。在外拓，我们使理想成为现实。我们将会创造历史，成就未来。外拓一年，你取得的能力将成为你攀向成功的层层阶梯；外拓一年，你收获的情谊将成为一生中的无可代替。</p>
            <strong>关键词</strong>
            <br>
            <span class="uk-label">发现</span>
            <span class="uk-label">创新</span>
            <span class="uk-label">交流</span>
            <span class="uk-label">共赢</span>
        </div>
    </div>
    <div id="offcanvas-jt" uk-offcanvas="mode: push;overlay: true">
        <div class="uk-offcanvas-bar">

            <button class="uk-offcanvas-close" type="button" uk-close></button>

            <h3>技术推广部</h3>

            <p>人称鸡腿部，勤创中心非常强大的技术部门。中心的整体形象由我们把握定位；勤创的完美品牌由我们设计打造。美工组主攻设计，为每一套宣传品注入创意的元素；技术组敲击代码，保证每一个程序都是最专业的诠释。我们追求创新，热爱设计，强调技术，定期的技术培训使每一个小鸡腿都能够为勤创提供强大的技术支持。我们不定期为全中心举办内训，在提升中心整体的技术水平的同时，鸡腿部也在逐渐成长为浙大一流的技术部门。</p>
            <strong>关键词</strong>
            <br>
            <span class="uk-label">创新</span>
            <span class="uk-label">投入</span>
            <span class="uk-label">成长</span>

        </div>
    </div>
    <div id="offcanvas-jg" uk-offcanvas="mode: push;overlay: true">
        <div class="uk-offcanvas-bar">

            <button class="uk-offcanvas-close" type="button" uk-close></button>

            <h3>兼职管理部</h3>

            <p>兼职管理部门兼具外事与内事，致力于回报社会服务同学 : 作为兼职平台的搭建者，兼管拥有着权威官方的兼职信息共享平台，通过勤创APP、校内论坛、QQ群等媒介帮助同学们参与社会工作，实现勤工助学;作为精品活动的制作人，兼管为同学们私人定制，点亮未知技能，助力梦想成真;作为一路向前的追梦人，兼管在踏实中创新，在挑战中进步，始终秉持全心全意为同学们服务的初心。</p>
            <strong>关键词</strong>
            <br>
            <span class="uk-label">服务</span>
            <span class="uk-label">共享</span>

        </div>
    </div>
    <div id="offcanvas-pg" uk-offcanvas="mode: push;overlay: true">
        <div class="uk-offcanvas-bar">

            <button class="uk-offcanvas-close" type="button" uk-close></button>

            <h3>品牌公关部</h3>

            <p>品牌公关部为勤创2017年度新设部门，内外兼责。其主要职能为：打造并维护勤创品牌形象、巩固与拓展组织校内外公共关系。现阶段主要负责组织媒体（官方网站、勤创APP、微信公众平台等）的运营推广、勤创精品系列活动的打造与宣传、推动社团广场的建立和完善、新生全方位咨询指导等。品牌公关部在承接内事部门部分职能的同时，以开放的思维模式，积极对外开拓新职能、新资源，以全新的品牌内涵和目标为起点，多维度宣传推广，不断致力于革新发展，发扬勤创的精英品牌形象与家文化，为组织发展打出强有力的品牌效应。</p>
            <strong>关键词</strong>
            <br>
            <span class="uk-label">多维</span>
            <span class="uk-label">创新</span>
            <span class="uk-label">开放</span>
        </div>
    </div>
    <div id="offcanvas-rz" uk-offcanvas="mode: push;overlay: true">
        <div class="uk-offcanvas-bar">

            <button class="uk-offcanvas-close" type="button" uk-close></button>

            <h3>人力资源部</h3>

            <p>作为勤创的人事部门，主要负责中心人力资源配置、管理与提升，包括人员纳新、人力资源信息系统的构建与维护、大小型培训的组织开展以及大型素质拓展项目的策划以及落实等多个方面。人力资源部把握着勤创最核心的人际交流网络，在此基础上致力于为家文化的构建不断添砖加瓦。从HR的角度去思考问题，用HR的眼光来校准航向，我们一直在路上。</p>
            <strong>关键词</strong>
            <br>
            <span class="uk-label">招贤</span>
            <span class="uk-label">育英</span>
        </div>
    </div>
    <div id="offcanvas-cz" uk-offcanvas="mode: push;overlay: true">
        <div class="uk-offcanvas-bar">

            <button class="uk-offcanvas-close" type="button" uk-close></button>

            <h3>创业实践指导部</h3>

            <p>“创”于专业，“指”引卓越。创业实践指导部作为勤创中心最主要的外事部门之一，属于校内最具实力的专业化创业实践指导团队。基于学校创业教育平台，创指整合创业家、企业、高校等多方位资源，致力于通过受众面广泛的活动设计，为浙大人构建集创业信息前瞻、素质引导与培养为一体的实践性指导体系。部门日常工作包括企业外联、活动创设等。在团队努力下，创指已成功与阿里巴巴、网易、 娃哈哈、吉利等知名企业开展合作，举办了精英团队挑战赛、走进名企、名家讲坛、创业论坛等精品活动，在校内外引发了极佳反响。</p>
            <strong>关键词</strong>
            <br>
            <span class="uk-label">专业</span>
            <span class="uk-label">卓越</span>
            <span class="uk-label">实践</span>

        </div>
    </div>
  </div>

    <!-- Optional JavaScript -->
    <script src="../canvas-nest/dist/canvas-nest.js" color="245,153,162" count="300"></script>

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://cdn.bootcss.com/jquery/3.3.1/jquery.min.js"></script>

    <script src="https://cdn.bootcss.com/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.bootcss.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    
    <!-- UIkit JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-rc.10/js/uikit.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-rc.10/js/uikit-icons.min.js"></script>
    <!-- rating js-->
    <script src="https://cdn.bootcss.com/semantic-ui/2.3.1/components/rating.min.js"></script>
    <!-- validator js-->
    <script src="https://cdn.bootcss.com/jquery.bootstrapvalidator/0.5.3/js/bootstrapValidator.min.js"></script>
    <!-- svg js -->
    <script src="https://cdn.bootcss.com/svg.js/2.6.5/svg.min.js"></script>
    <!-- my js -->
    <script src="js/new.js"></script>
  </body>
</html>
<script type="text/javascript">
$('.ui.rating').rating({
  onRate:function () {
    var stararray=$('.ui.rating').rating('get rating');
    $('#stars').attr('value',stararray);
  }
})
</script>
<script type="text/javascript">
$(document).ready(function(){
  if (typeof SVGRect !== "undefined") 
  {  /* If the browser does support SVG. */ 
    //alert("support svg!");
    //alert($(".svgbox #moon2").attr("xlink:href"));
    //$("embed").hide();
  }
  else 
  {  /* If the browser does not support SVG. */ 
    UIkit.notification({
        message: '请您更换内核更高的浏览器！!',
        status: 'danger',
        pos: 'top-center',
        timeout: 3000
    });
  }
});
</script>
<script type="text/javascript">
    $(document).ready(function() {
      var draw = SVG('mysvgbox').size('100%','100%');
      var image = draw.image('static/Rectangle.png');
      image.attr({x:0,y:0,id:'svgboxbgpic'});
      image.size('100%');
      $("#svgboxbgpic").css('height','auto')

      var moon1 = draw.image('static/Group.svg');
      moon1.attr({width:'16%',height:'16%',x:'-10%',y:'10%'});
      moon1.animate({duration:1500}).move('20%','10%')
           .animate({duration:300}).move('22%','10%')
           .animate({duration:300}).move('20%','10%')
           .animate({duration:300}).move('22%','10%');

      var moon2 = draw.image('static/Oval Copy 3.svg');
      moon2.attr({width:'11%',height:'11%',x:'95%',y:'24%'});
      moon2.animate({duration:3000}).move('65%','24%');   

      var moon3 = draw.image('static/Oval Copy 3.svg');
      moon3.attr({width:'14%',height:'14%',x:'80%',y:'63%'});

      var cloud1 = draw.image('static/cloud1.svg');
      cloud1.attr({width:'18%',height:'30%',x:'-10%',y:'23%'});
      cloud1.animate({duration:1500}).move('-2%','23%')
            .animate(300).move('-3%','23%')
            .animate(500).move('-1%','23%');  

      var cloud2 = draw.image('static/cloud2.svg');
      cloud2.attr({width:'45%',height:'27%',x:'45%',y:'-13%'});
      cloud2.animate(1500).move('45%','-2%')
            .animate(300).move('45%','-4%')
            .animate(500).move('45%','-2%');

      var cloud3 = draw.image('static/cloud3.svg');
      cloud3.attr({width:'35%',height:'23%',x:'60%',y:'-13%'});
      cloud3.animate(1500).move('60%','-2%')
            .animate(250).move('60%','-6%')
            .animate(500).move('60%','-3%');     

      var cloud4 = draw.image('static/cloud4.svg');
      cloud4.attr({width:'9%',height:'15%',x:'97%',y:'35%'});
      cloud4.animate(1500).move('91%','35%')
            .animate(300).move('92%','35%')
            .animate(500).move('91%','35%');

      var cloud5 = draw.image('static/cloud5.svg');
      cloud5.attr({width:'18%',height:'15%',x:'30%',y:'61%'}); 
      cloud5.animate(2000).move('30%','55%');

      var line = draw.image('static/line.svg');
      line.attr({width:'100%',height:'100%',x:'0',y:'-2%'});
      line.animate(2000).move('0','-12%')
          .animate(2000).move('0','-6%');  

      var title = draw.image('static/UIslices/PAPIC.png');
      title.attr({width:'40%',height:'15%',x:'30%',y:'37%'});
      title.animate(1500).move('30%','25%')
           .animate(1500).move('30%','30%');

      var text = draw.text("浙大勤创秋季纳新");
      text.attr({x:'32.5%',y:'48%',fill:'white',opacity:0})
      text.animate({duration:1000,delay:3000}).attr({opacity:1});

      var textline = draw.line().stroke({width:2});
      textline.attr({x1:"25%",y1:"45%",x2:"25%",y2:"45%",stroke:"white",opacity:0});
      textline.animate({duration:300,delay:3500}).attr({opacity:0.8,x2:'75%'});
    })
</script>