<div class="banner">
    <section class="box">
        <ul class="texts">
            <p>打了死结的青春，捆死一颗苍白绝望的灵魂。</p>
            <p>为自己掘一个坟墓来葬心，红尘一梦，不再追寻。</p>
            <p>加了锁的青春，不会再因谁而推开心门。</p>
        </ul>
        <div class="avatar"><a href="#"><span>米饭加盐</span></a> </div>
    </section>
</div>
<!--<div class="template">-->
<!--    <div class="box">-->
<!--        <h3>-->
<!--            <p><span>个人博客</span>模板 Templates</p>-->
<!--        </h3>-->
<!--        <ul>-->
<!--            <li><a href="/"  target="_blank"><img src="/images/01.jpg"></a><span>仿新浪博客风格·梅——古典个人博客模板</span></li>-->
<!--            <li><a href="/" target="_blank"><img src="/images/02.jpg"></a><span>黑色质感时间轴html5个人博客模板</span></li>-->
<!--            <li><a href="/"  target="_blank"><img src="/images/03.jpg"></a><span>Green绿色小清新的夏天-个人博客模板</span></li>-->
<!--            <li><a href="/" target="_blank"><img src="/images/04.jpg"></a><span>女生清新个人博客网站模板</span></li>-->
<!--            <li><a href="/"  target="_blank"><img src="/images/02.jpg"></a><span>黑色质感时间轴html5个人博客模板</span></li>-->
<!--            <li><a href="/"  target="_blank"><img src="/images/03.jpg"></a><span>Green绿色小清新的夏天-个人博客模板</span></li>-->
<!--        </ul>-->
<!--    </div>-->
<!--</div>-->
<article>
    <h2 class="title_tj">
        <p>文章<span>推荐</span></p>
    </h2>
    <div class="bloglist left">
        <?php
        if($list)
        {
            foreach($list as $value) {
                ?>
                <h3><?php echo $value['title'] ?></h3>
<!--                <figure><img src="/images/001.png"></figure>-->
                <figure><img src="<?php echo $value['img'] ?>" ></figure>
                <ul>
                    <p><?php echo $value['content'] ?></p>
                    <a title="/" href="/" target="_blank" class="readmore">阅读全文>></a>
                </ul>
                <p class="dateview"><span><?php echo $value['create_time']; ?></span><span>作者：<?php echo $value['author'] ?></span><span>个人博客：[<a href="/news/life/">程序人生</a>]</span>
                </p>
                <?php
            }
         }else{
        ?>
            <h3>博主还没发布文章。</h3>
        <?php
        }
        ?>
        <?php echo $page->getSubPageCssStr(); ?>
    </div>
    <aside class="right">
        <div class="weather"><iframe width="250" scrolling="no" height="60" frameborder="0" allowtransparency="true" src="http://i.tianqi.com/index.php?c=code&id=12&icon=1&num=1"></iframe></div>
        <div class="news">
            <h3>
                <p>最新<span>文章</span></p>
            </h3>
            <ul class="rank">
                <li><a href="/" title="Column 三栏布局 个人网站模板" target="_blank">Column 三栏布局 个人网站模板</a></li>
                <li><a href="/" title="with love for you 个人网站模板" target="_blank">with love for you 个人网站模板</a></li>
                <li><a href="/" title="免费收录网站搜索引擎登录口大全" target="_blank">免费收录网站搜索引擎登录口大全</a></li>
                <li><a href="/" title="做网站到底需要什么?" target="_blank">做网站到底需要什么?</a></li>
                <li><a href="/" title="企业做网站具体流程步骤" target="_blank">企业做网站具体流程步骤</a></li>
                <li><a href="/" title="建站流程篇——教你如何快速学会做网站" target="_blank">建站流程篇——教你如何快速学会做网站</a></li>
                <li><a href="/" title="box-shadow 阴影右下脚折边效果" target="_blank">box-shadow 阴影右下脚折边效果</a></li>
                <li><a href="/" title="打雷时室内、户外应该需要注意什么" target="_blank">打雷时室内、户外应该需要注意什么</a></li>
            </ul>
            <h3 class="ph">
                <p>点击<span>排行</span></p>
            </h3>
            <ul class="paih">
                <li><a href="/" title="Column 三栏布局 个人网站模板" target="_blank">Column 三栏布局 个人网站模板</a></li>
                <li><a href="/" title="withlove for you 个人网站模板" target="_blank">with love for you 个人网站模板</a></li>
                <li><a href="/" title="免费收录网站搜索引擎登录口大全" target="_blank">免费收录网站搜索引擎登录口大全</a></li>
                <li><a href="/" title="做网站到底需要什么?" target="_blank">做网站到底需要什么?</a></li>
                <li><a href="/" title="企业做网站具体流程步骤" target="_blank">企业做网站具体流程步骤</a></li>
            </ul>
            <h3 class="links">
                <p>友情<span>链接</span></p>
            </h3>
            <ul class="website">
                <li><a href="/">个人博客</a></li>
                <li><a href="/">谢泽文个人博客</a></li>
                <li><a href="/">3DST技术网</a></li>
                <li><a href="/">思衡网络</a></li>
            </ul>
        </div>
        <!-- Baidu Button BEGIN -->
        <div id="bdshare" class="bdshare_t bds_tools_32 get-codes-bdshare">
            <a class="bds_tsina"></a>
            <a class="bds_qzone"></a>
            <a class="bds_tqq"></a>
            <a class="bds_renren"></a>
            <span class="bds_more"></span>
            <a class="shareCount"></a></div>
        <script type="text/javascript" id="bdshare_js" data="type=tools&amp;uid=6574585" ></script>
        <script type="text/javascript" id="bdshell_js"></script>
        <a href="/" class="weixin"> </a></aside>
</article>