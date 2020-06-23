<?php
use App\Models\Admin\Config;
  $data = Config::select("name","value","name2")->get();
        foreach($data as $key=>$value)
        {
            $config[$value['name']] = $value['value'];

        }
?>
<footer>
  <div class="copyright">
    <p>CopyRight 2013 All Right Reserved &nbsp;ICP:873468834<a href="javascript:;" target="_blank">网站地图</a></p>
    <p class="copyright_p">地址：{{$config['address']}} &nbsp;电话：{{$config['telphone']}} &nbsp;传真：{{$config['fix']}}&nbsp;</p>
  </div>
</footer>