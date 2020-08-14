<?php ?>
<!--
Module Name: modulR Announcement Bar
Component: Header Bar
Author: Simon Bailey
Verson: 1.1
website: http://www.modulr.com
-->
<style>
.<?=$css_id?>announcement-fullwidth {
margin-top: 10px;
width: 100%;
text-align: center;
}
.<?=$css_id?>announcement-fullwidth-yellow {
background: #fee15b;
}
.<?=$css_id?>announcement-fullwidth-blue {
background: #83B0F0;
}
.<?=$css_id?>announcement-container {
margin: 0 auto;
color: #4a5052;
display: flex;
padding: 5px 0;
flex-direction: row;
justify-content: space-between;
align-items: center;
align-content: space-between;
}
.<?=$css_id?>announcement-bar {
margin: 0 auto;
justify-content: center;
width: 80%;
}
@media only screen and (max-width: 1180px)
.<?=$css_id?>announcement-bar {
width: 100%;
}
</style>
<div class="<?=$css_id?>announcement-fullwidth <?=$css_id?>announcement-fullwidth-yellow">
  <div class="<?=$css_id?>announcement-container">
    <div class="<?=$css_id?>announcement-bar">
      Yellow Announcement Bar for all pages except PLP and PDP
    </div>
  </div>
</div>
