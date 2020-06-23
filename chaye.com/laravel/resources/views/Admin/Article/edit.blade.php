@include('Admin.Common.header')
@include('Admin.Common.menu')
 <div id="dcMain">
   <!-- 当前位置 -->
<div id="urHere">DouPHP 管理中心<b>></b><strong>编辑新闻</strong> </div>   <div class="mainBox" style="height:auto!important;height:550px;min-height:550px;">
            <h3><a href="/chaye.com/laravel/public/admin/article" class="actionBtn">新闻列表</a>编辑新闻</h3>
    <form action="{{url('admin/article/update',$manage->id)}}" method="post" enctype="multipart/form-data">
    {{csrf_field()}}
     <table width="100%" border="0" cellpadding="8" cellspacing="0" class="tableBasic">
      <tr>
       <td width="90" align="right">文章名称</td>
       <td>
        <input type="text" name="title" value="{{$manage->title}}" size="80" class="inpMain" />
       </td>
      </tr>
      <tr>
       <td align="right">文章分类</td>
       <td>
        <select name="cateid">
          @foreach($category as $cate)
          <option value="{{$cate->id}}" @if($manage->cateid == $cate->id) selected @endif>{{$cate->name}}</option>
          @endforeach
        </select>
       </td>
      </tr>
      <tr>
       <td width="90" align="right">作者</td>
       <td>
        <input type="text" name="author" value="{{$manage->author}}" size="80" class="inpMain" />
       </td>
      </tr>
      <tr>
       <td align="right" valign="top">文章描述</td>
       <td>
        <!-- KindEditor -->
      <link rel="stylesheet" href="{{URL::asset('Admin/js/kindeditor/themes/default/default.css')}}" />
			<link rel="stylesheet" href="{{URL::asset('Admin/js/kindeditor/plugins/code/prettify.css')}}" />
			<script charset="utf-8" src="{{URL::asset('Admin/js/kindeditor/kindeditor.js')}}"></script>
			<script charset="utf-8" src="{{URL::asset('Admin/js/kindeditor/lang/zh_CN.js')}}"></script>
			<script charset="utf-8" src="{{URL::asset('Admin/js/kindeditor/plugins/code/prettify.js')}}"></script>
        <script>
					KindEditor.ready(function(K) {
						var editor1 = K.create('textarea[name="content"]', {
							cssPath : '/Admin/js/kindeditor/plugins/code/prettify.css',
							uploadJson : '../php/upload_json.php',
							fileManagerJson : '../php/file_manager_json.php',
							allowFileManager : true,
							afterCreate : function() {
								var self = this;
								K.ctrl(document, 13, function() {
									self.sync();
									K('form[name=example]')[0].submit();
								});
								K.ctrl(self.edit.doc, 13, function() {
									self.sync();
									K('form[name=example]')[0].submit();
								});
							}
						});
						prettyPrint();
					});
			</script>
        <!-- /KindEditor -->
        <textarea id="content" name="content" style="width:780px;height:400px;" class="textArea">{{$manage->content}}</textarea>
       </td>
      </tr>
      <tr>
       <td align="right">缩略图</td>
       <td>
        <input type="file" name="avatar" size="38" class="inpFlie" />
        <img src="{{URL::asset('Admin/images/icon_no.png')}}"></td>
      </tr>
      <tr>
       <td align="right">关键字</td>
       <td>
        <input type="text" name="keyword" value="{{$manage->keyword}}" size="50" class="inpMain" />
       </td>
      </tr>
      <tr>
       <td align="right">简单描述</td>
       <td>
        <input type="text" name="description" value="{{$manage->description}}" size="50" class="inpMain" />
       </td>
      </tr>
      <tr>
       <td></td>
       <td>
       <input type="hidden" name="date" value="<?php echo (date("Y-m-d H:i:s",time()))?>">
        <input name="submit" class="btn" type="submit" value="提交" />
       </td>
      </tr>
     </table>
    </form>
       </div>
 </div>
 <div class="clear"></div>
<div id="dcFooter">
 <div id="footer">
  <div class="line"></div>
  <ul>
   版权所有 © 2013-2015 漳州豆壳网络科技有限公司，并保留所有权利。
  </ul>
 </div>
</div><!-- dcFooter 结束 -->
</body>
</html>