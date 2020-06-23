@include('Admin.Common.header')
@include('Admin.Common.menu')
 <div id="dcMain">
   <!-- 当前位置 -->
<div id="urHere">DouPHP 管理中心<b>></b><strong>新闻中心</strong> </div>   <div class="mainBox" style="height:auto!important;height:550px;min-height:550px;">
    <h3><a href="/chaye.com/laravel/public/admin/article/add" class="actionBtn">添加新闻</a>新闻列表</h3>
        <table width="100%" border="0" cellpadding="8" cellspacing="0" class="tableBasic">
      <tr>
       <th align="center">
        <input name='chkall' type='checkbox' id='chkall' onclick='selectcheckbox(this.form)' value='check' >
       </th>
       <th align="center">标题</th>
       <th align="center">作者</th>
       <th align="center">封面</th>
       <th align="center">创建时间</th>
       <th align="center">所属分类</th>
       <th align="center">操作</th>
      </tr>
      @foreach($list as $vo)
      <tr>
       <td align="center"><input type=checkbox name=tables[]></td>
       <td align="center">{{$vo->title}}</td>
       <td align="center">{{$vo->author}}</td>
       <td align="center"><a href="/{{$vo->avatar}}" target="_blank">{{$vo->avatar}}</a></td>
       <td align="center">{{$vo->date}}</td>
       <td align="center">{{$vo->article->name}}</td>
       <td align="center"><a href="{{url('admin/article/edit',$vo->id)}}">编辑</a> | <a href="{{url('admin/article/forceDelete',$vo->id)}}">删除</a></td>
      </tr>
      @endforeach   
    </table>
    {{$list->links()}}
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
<div class="clear"></div> </div>
</body>
</html>