<?php
    //提交到支付宝转账页面
    //将变量替换为字符串测试通过.
    header("content-Type:text/html;charset=GBK");
    $memo = iconv('UTF-8', 'GBK', '请不要修改付款说明和付款金额，以免造成充值失败【收款啦自动充值接口】');  //utf-8转换成gb2312
    echo '<form name="myform" action="https://shenghuo.alipay.com/send/payment/fill.htm" method="post">
			<input name="optEmail" id="optEmail"  value="' . $cuser['zfb'] . '"  type="hidden">
			<input name="payAmount" id="payAmount" value="' . $payAmount . '" type="hidden">
			<input name="title" id="title" value="' . $title . '" type="hidden">
			<input name="memo" id="memo" value="' . $memo . '" type="hidden">
			<script type="text/javascript">document.myform.submit();</script>';


?>