@include('Admin.Common.header')
@include('Admin.Common.menu')
 <div id="dcMain">
   <!-- 当前位置 -->
<div id="urHere">DouPHP 管理中心<b>></b><strong>编辑banner</strong> </div>   <div class="mainBox" style="height:auto!important;height:550px;min-height:550px;">
            <h3><a href="/chaye.com/laravel/public/admin/banner" class="actionBtn">相册列表</a>编辑banner</h3>
    <form action="{{url('admin/banner/update',$manage->id)}}" method="post" enctype="multipart/form-data">
    {{csrf_field()}}
     <table width="100%" border="0" cellpadding="8" cellspacing="0" class="tableBasic">
      <tr>
       <td width="90" align="right">banner名称</td>
       <td>
        <input type="text" name="name" value="{{$manage->name}}" size="80" class="inpMain" />
       </td>
      </tr>
      <tr>
       <td align="right">缩略图</td>
       <td>
        <input type="file" name="picture" size="38" class="inpFlie" />
        <img src="{{URL::asset('Admin/images/icon_no.png')}}"></td>
      </tr>
      <tr>
       <td width="90" align="right">适应区域</td>
       <td>
        <select name="location" id="">
            <option value="1" @if($manage->location == '1') selected @endif>广告</option>
            <option value="2" @if($manage->location == '2') selected @endif>展示</option>
        </select>
       </td>
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