@include('Admin.Common.header')
@include('Admin.Common.menu')
 <div id="dcMain">
   <!-- 当前位置 -->
<div id="urHere">DouPHP 管理中心<b>></b><strong>添加相册</strong> </div>   <div class="mainBox" style="height:auto!important;height:550px;min-height:550px;">
            <h3><a href="/chaye.com/laravel/public/admin/photo" class="actionBtn">相册列表</a>添加相册</h3>
    <form action="/chaye.com/laravel/public/admin/photo/store" method="post" enctype="multipart/form-data">
    {{csrf_field()}}
     <table width="100%" border="0" cellpadding="8" cellspacing="0" class="tableBasic">
      <tr>
       <td width="90" align="right">相册名称</td>
       <td>
        <input type="text" name="name" value="" size="80" class="inpMain" />
       </td>
      </tr>
      <tr>
       <td width="90" align="right">所属分类</td>
       <td>
          <select name="cateid" id="">
            @foreach($category as $cate)
              <option value="{{$cate->id}}">{{$cate->name}}</option>
            @endforeach
          </select>
       </td>
      </tr>
      <tr>
       <td align="right">缩略图</td>
       <td>
        <input type="file" name="picture" size="38" class="inpFlie" />
        <img src="{{URL::asset('Admin/images/icon_no.png')}}"></td>
      </tr>
      <tr>
       <td></td>
       <td>
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