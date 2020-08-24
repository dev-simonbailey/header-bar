<?php ?>
<!--
Module Name: modulR Announcement Bar
Component: Header Bar
Author: Simon Bailey
Verson: 1.2.2
website: http://www.modulr.com
-->
<style>
.<?=$css_id?>announcement-fullwidth {
margin-top: 10px;
width: 100%;
text-align: center;
}
.<?=$css_id?>announcement-fullwidth-yellow {
background: #FFFF00;
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
      Version 1.2.2 of the Announcement Header Bar
    </div>
  </div>
</div>
