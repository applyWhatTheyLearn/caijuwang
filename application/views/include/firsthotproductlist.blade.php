<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <link href="../css/css.css" rel="stylesheet" type="text/css">
    <title>热销排行</title>
    <style type="text/css">
        <!--
        body {
            margin-left: 0px;
            margin-top: 0px;
            margin-right: 0px;
            margin-bottom: 0px;
        }

        -->
    </style>
</head>
<body>
  @if(count($products)>0)
    <table width="770" height="42" border="0" cellpadding="0" cellspacing="0" class="TableLineColor">
        <tr>
            <td width="701" height="24" background="../images/pic_4_6.gif">&nbsp;&nbsp;&nbsp;<strong><a
                        href="../paihang/ph_list.php" target="_parent"><font
                            color="#228E1E">热销排行</font></a></strong></td>
            <td width="67" background="../images/pic_4_6.gif"><a href="../paihang/ph_list.php" target="_parent"><font
                        color="#228E1E">&gt;&gt; more</font></a></td>
        </tr>
        <tr>
            <td height="18" colspan="2">
              <table width=760 border=0 cellspacing=0 cellpadding=0>
               <tr>
                 @foreach($products as $product)
                 <td width=108 height=135 align=center>
                   <a href=../product/product_detail.php?l_id=" . {{$product->l_id}} . " target=_parent>
                     @if($product->pic)
                     <img src=../folder/product/{{$product->pic->l_pic}}.{{$product->pic->l_ext}} width=100 height=100  class='picborder' alt='{{$product->pic->l_title}}'>
                     @else
                     <img src=../images/pic_4_12.gif width=100 height=100 class=picborder>
                     @endif
                   </a>
                   <table width=108 border=0 cellspacing=0 cellpadding=0>
                     <tr>
                       <td height=34 valign=middle align=center>
                         <font color=#404040 size=2>
                         {{substr($product->l_name, 0, 10)}}
                         </font>
                       </td>
                     </tr>
                   </table>
                 </td>
                 @endforeach
               </tr>
             </table>
           </td>
        </tr>
    </table>
@endif
<p>
</p>
</body>
</html>
