<?php
if(!defined('InEmpireCMS'))
{
	exit();
}
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>西装 - Powered by EmpireCMS</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="/skin/default/css/style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="/skin/default/js/tabs.js"></script>
</head>
<body class="channle">
 <!-- 头部开始 -->
    <header>
      <div class="nav-top">
        <div class="center">
          <div class="nav-top-fl">
            <p><a href="https://www.tmall.com/" target="blank">天猫首页</a></p>
            <p>喵，欢迎来到天猫</p>
            <a href="https://login.tmall.com/" target="blank">请登录</a>
            <a href="https://register.tmall.com" target="blank">免费注册</a>
          </div>
          <div class="nav-top-fr">
            <ul>
              <li>
                <a href="https://i.taobao.com/" target="blank">我的淘宝</a>
              </li>
              <li>
                <a href="https://cart.taobao.com/" target="blank">我的购物车</a>
              </li>
              <li>
                <a href="https://shoucang.taobao.com/" target="blank">收藏夹</a>
              </li>
              <li>
                <a href="https://pages.tmall.com/" target="blank">手机版</a>
              </li>
              <li>
                <a href="https://www.taobao.com/" target="blank">淘宝网</a>
              </li>
              <li>
                <a href="https://login.taobao.com/" target="blank">商家支持</a>
              </li>
              <li>
                <a href="https://huodong.taobao.com/" target="blank">
                  网站导航
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div class="head center">
        <div class="logo">
          <a href="/index.html" title="阿峰男装">阿峰男装</a>
        </div>
        <div class="search">
          <input type="text" placeholder="搜索/天猫/商品/店铺" autofocus />
          <button>搜索</button>
        </div>
        <div class="shotcar">
          <img src="/images/shotcar.png" alt="" />
          <a href="https://cart.taobao.com/">我的购物车</a>
        </div>
      </div>
      <div class="head-bot center">
        <ul>
          <li><a href="/index.html">首页</a></li>
          <li><a href="/all product/11.html" target="blank">所有产品</a></li>
          <li><a href="#" target="blank">长袖衬衫</a></li>
          <li><a href="#" target="blank">精品裤装</a></li>
          <li><a href="#" target="blank">正品西装</a></li>
          <li><a href="#" target="blank">商务皮鞋</a></li>
          <li><a href="#" target="blank">配饰</a></li>
          <li><a href="#" target="blank">礼服</a></li>
          <li><a href="#" target="blank">短袖</a></li>
        </ul>
      </div>
    </header>
    <!--头部结束 -->
<table width="100%" border="0" cellspacing="10" cellpadding="0">
<tr valign="top">
<td class="news_list"><table width="100%" border="0" cellspacing="0" cellpadding="0" class="position">
<tr>
<td>您当前的位置：<a href="/">首页</a>&nbsp;>&nbsp;<a href="//"></a></td>
</tr>
</table>
<? @sys_ForSonclassData('selfinfo',5,38,0,0,7,0,0);?></td>
<td class="sider"><table width="100%" border="0" cellspacing="0" cellpadding="0" class="title">
<tr>
<td><strong>推荐资讯</strong></td>
</tr>
</table>
<table width="100%" border="0" cellspacing="8" cellpadding="0" class="box">
<tr>
<td><? @sys_GetClassNewsPic('selfinfo',2,4,128,90,1,20,2);?>
</td>
</tr>
</table>
<table width="100%" border="0" cellspacing="0" cellpadding="0" class="title margin_top">
<tr>
<td><strong>最后更新</strong></td>
</tr>
</table>
<table width="100%" border="0" cellspacing="0" cellpadding="0" class="box">
<tr>
<td><ul>
<? @sys_GetEcmsInfo('selfinfo',10,44,0,0,2,0);?> 
</ul></td>
</tr>
</table>
<table width="100%" border="0" cellspacing="0" cellpadding="0" class="title margin_top">
<tr>
<td><strong>热门点击</strong></td>
</tr>
</table>
<table width="100%" border="0" cellspacing="0" cellpadding="0" class="box">
<tr>
<td><ol class="rank">
<? @sys_GetEcmsInfo('selfinfo',10,40,0,1,10,0);?> 
</ol></td>
</tr>
</table></td>
</tr>
</table>
 <!-- 底部模块开始 -->
    <footer>
      <div class="foot center">
        <div class="foot-top">
          <ul>
            <li>
              <img src="/images/zheng.png" alt="" />
              <div class="box-top">
                <p>正品保障</p>
                <p>正品保障，提供发票</p>
              </div>
            </li>
            <li>
              <img src="/images/che.png" alt="" />
              <div class="box-top">
                <p>极速物流</p>
                <p>急速物流，急速送达</p>
              </div>
            </li>
            <li>
              <img src="/images/bao.png" alt="" />
              <div class="box-top">
                <p>无忧售后</p>
                <p>7天无理由退换货</p>
              </div>
            </li>
            <li>
              <img src="/images/lian.png" alt="" />
              <div class="box-top">
                <p>特色服务</p>
                <p>私人定制家电套餐</p>
              </div>
            </li>
            <li>
              <img src="/images/wen.png" alt="" />
              <div class="box-top">
                <p>帮助中心</p>
                <p>您的购物指南</p>
              </div>
            </li>
          </ul>
        </div>
        <div class="foot-cont">
          <dl>
            <dt>购物指南</dt>
            <dd>购物流程</dd>
            <dd>会员介绍</dd>
            <dd>生活旅行/团购</dd>
            <dd>常见问题</dd>
            <dd>联系客服</dd>
          </dl>
          <dl>
            <dt>配送方式</dt>
            <dd>上门自提</dd>
            <dd>211限时达</dd>
            <dd>配送服务查询</dd>
            <dd>配送费收取标准</dd>
            <dd>海外配送</dd>
          </dl>
          <dl>
            <dt>支付方式</dt>
            <dd>货到付款</dd>
            <dd>在线支付</dd>
            <dd>分期付款</dd>
            <dd>邮局汇款</dd>
            <dd>公司转账</dd>
          </dl>
          <dl>
            <dt>售后服务</dt>
            <dd>售后政策</dd>
            <dd>价格保护</dd>
            <dd>退款说明</dd>
            <dd>返修/退换货</dd>
            <dd>取消订单</dd>
          </dl>
          <dl>
            <dt>特色服务</dt>
            <dd>夺宝岛</dd>
            <dd>DIY装机</dd>
            <dd>延保服务</dd>
            <dd>品优购E卡</dd>
            <dd>品优购通信</dd>
          </dl>
        </div>
        <div class="foot-bot">
          <ul>
            <li><a href="">关于我们</a></li>
            <li><a href="">联系我们</a></li>
            <li><a href="">联系客服</a></li>
            <li><a href="">商家入驻</a></li>
            <li><a href="">营销中心</a></li>
            <li><a href="">友情链接</a></li>
            <li><a href="">销售联盟</a></li>
          </ul>
          <p>
            <地址：安阳职业技术学院xxxxxxxxxxxxxxx 邮编：100096
            电话：400-618-4000 传真：010-82935100 邮箱: zhanghj+itcast.cn/p>
          </p>
          <p>京ICP备08001421号京公网安备110108007702</p>
        </div>
      </div>
    </footer>
    <!-- 底部模块结束 -->
</body>
</html>