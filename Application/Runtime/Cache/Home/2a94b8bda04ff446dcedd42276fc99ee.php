<?php if (!defined('THINK_PATH')) exit();?> 
    <div class="form-group has-feedback">
        <input type="number" name="id" class="number" placeholder="用户名" />
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
    </div>
    <div class="form-group has-feedback">
        <input type="password" name="user_password" class="password" placeholder="密码" />
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
    </div>
        <div class="col-xs-4">
            <button type="submit" class="btn btn-primary btn-block btn-flat">登录</button>
        </div><!-- /.col -->
    </div>

    form-control-feedback"></span>
    </div>
        <div class="col-xs-4">
            <button type="submit" class="btn btn-primary btn-block btn-flat2">登录2</button>
        </div><!-- /.col -->
    </div>

    form-control-feedback"></span>
    </div>
        <div class="col-xs-4">
            <button type="submit" class="btn btn-primary btn-block btn-flat3">logout</button>
        </div><!-- /.col -->
    </div>

    
    form-control-feedback"></span>
    </div>
        <div class="col-xs-4">
            <button type="submit" class="btn btn-primary btn-block btn-flat4">put</button>
        </div><!-- /.col -->
    </div>

<script type="text/javascript">

let ajax = function(event) {
    
    console.log("ddd");
    let number = document.getElementsByClassName("number")[0].value;
    let password = document.getElementsByClassName("password")[0].value;
	let formdata=new FormData();
	formdata.append("id",number)
	formdata.append("user_password",password)
    console.log(formdata);
      let xhr = new XMLHttpRequest();
      xhr.onreadystatechange = function () {
        if (xhr.readyState == 4) {
          if ((xhr.status >= 200 && xhr.status < 300) || xhr.status == 304) {
            var resObj=xhr.responseText; //json字符串用文本形式接收			
				var jsonObj1=eval('('+resObj+')');		
				var name1=jsonObj1.type;
            console.log("Request was successful: "+name1);
          } else {
            console.log("Request was unsuccessful: " + xhr.status);
          }
        }
      }
      xhr.open("post", "<?php echo U('login/check');?>");
      xhr.withCredentials = true;
      xhr.send(formdata);
    }
    let submit=document.getElementsByClassName("btn btn-primary btn-block btn-flat")[0];
submit.addEventListener('click', ajax);
</script>


<script type="text/javascript">

  let ajax2 = function(event) {
      
      console.log("ddd2");
      let number = document.getElementsByClassName("number")[0].value;
      let password = document.getElementsByClassName("password")[0].value;
    let formdata=new FormData();
    formdata.append("id",number)
    formdata.append("user_password",password)
      console.log(formdata);
        let xhr = new XMLHttpRequest();
        xhr.onreadystatechange = function () {
          if (xhr.readyState == 4) {
            if ((xhr.status >= 200 && xhr.status < 300) || xhr.status == 304) {
              var resObj=xhr.responseText; //json字符串用文本形式接收			
          var jsonObj1=eval('('+resObj+')');		
          var name1=jsonObj1.type;
              console.log("Request was successful: "+name1);
            } else {
              console.log("Request was unsuccessful: " + xhr.status);
            }
          }
        }
        xhr.open("get", "<?php echo U('client/getClient');?>");
        xhr.withCredentials = true;
        xhr.send(formdata);
      }
      let submit2=document.getElementsByClassName("btn btn-primary btn-block btn-flat2")[0];
  submit2.addEventListener('click', ajax2);
  </script>


<script type="text/javascript">

  let ajax3 = function(event) {
      
      console.log("ddd3");
      let number = document.getElementsByClassName("number")[0].value;
      let password = document.getElementsByClassName("password")[0].value;
    let formdata=new FormData();
    formdata.append("id",number)
    formdata.append("user_password",password)
      console.log(formdata);
        let xhr = new XMLHttpRequest();
        xhr.onreadystatechange = function () {
          if (xhr.readyState == 4) {
            if ((xhr.status >= 200 && xhr.status < 300) || xhr.status == 304) {
              var resObj=xhr.responseText; //json字符串用文本形式接收			
          var jsonObj1=eval('('+resObj+')');		
          var name1=jsonObj1.type;
              console.log("Request was successful: "+name1);
            } else {
              console.log("Request was unsuccessful: " + xhr.status);
            }
          }
        }
        xhr.open("get", "<?php echo U('logout/checkout');?>");
        xhr.withCredentials = true;
        xhr.send(formdata);
      }
      let submit3=document.getElementsByClassName("btn btn-primary btn-block btn-flat3")[0];
  submit3.addEventListener('click', ajax3);
  </script>



<script type="text/javascript">

  let ajax4 = function(event) {
      
      console.log("ddd4");
      let number = "2019062699100485";
      let password = document.getElementsByClassName("password")[0].value;
    let formdata=new FormData();
    formdata.append("order_num",number)
    //formdata.append("user_password",password)
      console.log(formdata);
        let xhr = new XMLHttpRequest();
        xhr.onreadystatechange = function () {
          if (xhr.readyState == 4) {
            if ((xhr.status >= 200 && xhr.status < 300) || xhr.status == 304) {
              var resObj=xhr.responseText; //json字符串用文本形式接收			
          var jsonObj1=eval('('+resObj+')');		
          var name1=jsonObj1.type;
              console.log("Request was successful: "+name1);
            } else {
              console.log("Request was unsuccessful: " + xhr.status);
            }
          }
        }
        xhr.open("put", "<?php echo U('settle/settleRepair');?>");
        xhr.withCredentials = true;
        xhr.send(formdata);
      }
      let submit4=document.getElementsByClassName("btn btn-primary btn-block btn-flat4")[0];
  submit4.addEventListener('click', ajax4);
  </script>