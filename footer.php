<?php



echo '
<div class="footer" style="position: relative;  width:100%;">
<div style="width:100%; ">
  <ul class="FooterList"  style="list-style-type: none;" >
   <li class="FooterListItem" style="display:block;">Address: ' . $cst(address). ' </li>
   <li class="FooterListItem" style="display:block;">P.O. Box: '. $cst(PO). ' </li>
   <li class="FooterListItem" style="display:block;" >Phone number: '. $cst(phone). '</li>
   <li class="FooterListItem" style="display:block;">email: '. $cst(email). '</li>
  </ul>
</div>
<div style=" width:100%;  text-align:center;  ">
     <p class="smaller">ISOS is a 501c3 nonprofit organization with Tax ID#: 38-3655438 &#124; Copyright &copy; i-sos.org 2018</p>
</div>
</div>

';
?>