<script type="text/javascript">
function ShowHide(id,id1) {
    obj = document.getElementsByTagName("div");
    if (obj[id].style.display == 'block'){
     obj[id].style.display = 'none';
     obj[id1].style.display = 'block';
    }
    else {
     obj[id].style.display = 'block';
     obj[id1].style.display = 'none';
    }
}

function windowunder(link)
{
  window.opener.document.location=link;
  window.close();
}


function disable_button(state)
{
 document.getElementById('ty').disabled=(state=='1'?true:false);
}

at=new sack();

function ShowUpdate()
{
  var mytext=at.response + '';
  var myout=mytext.split('|');
  document.getElementById('thanks_div').style.display='block';
  document.getElementById('loading').style.display='none';
  document.getElementById('thanks_div').innerHTML = myout[0]; //at.response;
  disable_button(myout[1]);
}

function thank_you(ia)
{
  disable_button('1');
  at.resetData();
  at.onLoading=show_wait;
  at.requestFile='thanks.php';
  at.setVar('infohash',"'"+ia+"'");
  at.setVar('thanks',1);
  at.onCompletion = ShowUpdate;
  at.runAJAX();
}

function ShowThank(ia)
{
  at.resetData();
  at.onLoading=show_wait;
  at.requestFile='thanks.php';
  at.setVar('infohash',"'"+ia+"'");
  at.onCompletion = ShowUpdate;
  at.runAJAX();
}

function show_wait()
{
  document.getElementById('thanks_div').style.display='none';
  document.getElementById('loading').style.display='block';
}
</script>
<script type="text/javascript" src="jscript/prototype.js"></script>
<script type="text/javascript" src="jscript/scriptaculous.js?load=effects"></script>
<script type="text/javascript" src="jscript/lightbox.js"></script>
<link rel="stylesheet" href="jscript/lightbox.css" type="text/css" media="screen" />
    <div align="center">
      <table width="100%" class="lista" border="0" cellspacing="3" cellpadding="3">
        <tr>
          <td class="header"><tag:language.FILE />
          <if:MOD>
          <tag:mod_task />
          </if:MOD>
          </td>
          <td class="lista" align="center"><tag:torrent.filename /></td>



          <td class="header"><tag:language.TORRENT /><br><img src='images/torrent.gif' alt='DOWNLOAD TORRENT'></td>
          <td class="lista" align="center"><a href="index.php?page=downloadcheck&amp;id=<tag:torrent.info_hash />"><img src='images/downloadbutton.gif'></a>
          

         </td>
        </tr>

        
        <tr>
          <td align="right" class="header"><tag:language.INFO_HASH /></td>
          <td class="lista" align="center"><tag:torrent.info_hash /></td>
          <td align="right" class="header"><tag:language.CATEGORY_FULL /></td>
          <td class="lista" align="center"><tag:torrent.cat_name /></td>
          

          </tr>


          <tr>
<if:IMAGEIS>
 
          <td align="right" class="header"><tag:language.IMAGE /></td>
          <td class="lista" align="center"><a href="<tag:uploaddir /><tag:torrent.image />" title="view image" rel="lightbox"><img src="<tag:uploaddir /><tag:torrent.image />" width=<tag:width />></a></td>
          
</if:IMAGEIS>

          <td align="right" class="header">Pie Chart</td>
          <td class="lista" align="center" ><img src='<tag:SRC />'></td>
          </tr>

        

          <tr>
          <td align="right" class="header"><tag:language.DESCRIPTION /></td>
          <td class="lista" align="center"><tag:torrent.description /></td>
          
<if:SHOW_UPLOADER>

          <td align="right" class="header"><tag:language.UPLOADER /></td>
          <td class="lista" align="center"><tag:torrent.uploader /></td>

</if:SHOW_UPLOADER>
         </tr>



<if:YOUTUBE>
<tr>
          <td align="right" class="header"><tag:language.YT /><img src="images/youtube.gif"></td>
          <td class="lista" align="center"><object width="425" height="344"><param name="movie" value="<tag:torrent.youtube_video />"></param><param name="allowFullScreen" value="true"></param><embed src="<tag:torrent.youtube_video />" type="application/x-shockwave-flash" allowfullscreen="true" width="425" height="344"></embed></object></td>
        </tr>
</if:YOUTUBE>





        
        <tr>

          <td align="right" class="header"><tag:language.RATING /></td>
          <td class="lista" align="center"><tag:torrent.rating /></td>
                                         <td align="right" class="header" ><tag:language.THANKS_USERS /></td>
          <td class="lista" align="center">
              <form action="thanks.php" method="post" onsubmit="return false">
              <div id="thanks_div" name="thanks_div" style="display:block;"></div>
              <div id="loading" name="loading" style="display:none;"><img src="images/ajax-loader.gif" alt="" title="ajax-loader" /></div>
              <input type="button" id="ty" disabled="disabled" value="<tag:language.THANKS_YOU />" onclick="thank_you('<tag:torrent.info_hash />')" />
              </form>
              <script type="text/javascript">ShowThank('<tag:torrent.info_hash />');</script>
          </td>
        </tr>

        <tr>

          <td align="right" class="header"><tag:language.SIZE /></td>
          <td class="lista" align="center"><tag:torrent.size /></td>
          <td align="right" class="header"><tag:language.ADDED /></td>
          <td class="lista" ><tag:torrent.date /></td>
        </tr>
        <if:DISPLAY_FILES>
        <tr>
<if:NOT_XBTT>

          <td align="right" class="header"><tag:language.SPEED /></td>
          <td class="lista" align="center"><tag:torrent.speed /></td>

</if:NOT_XBTT>
        <td align="right" class="header" ><a name="expand" href="#expand" onclick="javascript:ShowHide('files','msgfile');"><tag:language.SHOW_HIDE /></a></td>
        <td align="left" class="lista">
        <div style="display:none" id="files">
          <table class="lista">
            <tr>
              <td align="center" class="header"><tag:language.FILE /></td>
              <td align="center" class="header"><tag:language.SIZE /></td>
            </tr>
            <loop:files>
            <tr>
              <td align="center" class="lista"><tag:files[].filename /></td>
              <td align="center" class="lista"><tag:files[].size /></td>
            </tr>
            </loop:files>
          </table>
        </div>
        <div style="display:block" id="msgfile" align="left"><tag:torrent.numfiles /></div>
        </td>
        </tr>
        </if:DISPLAY_FILES>








        <tr>
          <td align="right" class="header"><tag:language.PEERS /></td>
          <td class="lista" align="center"><tag:torrent.seeds />, <tag:torrent.leechers /> = <tag:torrent.peers /></td>
                    <td align="right" class="header"><tag:language.DOWNLOADED /></td>
          <td class="lista" align="center"><tag:torrent.downloaded /></td>
        </tr>
                <tr>


          	    <td align="right" class="header">Wishlist</td>
          <td class="lista" align="center"><tag:wish /></td>
        </tr>
        
<if:screen>
      <tr>
      <td align="right" class="header" valign="top"><tag:language.SCREEN /></td>
      <td class="lista">
      <table class="lista" border="0" cellspacing="0" cellpadding="0">
        <if:SCREENIS1>
          <td class="lista" align="center"><a href="<tag:uploaddir /><tag:torrent.screen1 />" title="view image" rel="lightbox"><img src="thumbnail.php?size=150&path=<tag:uploaddir /><tag:torrent.screen1 />"></a></td>
        </if:SCREENIS1>
        <if:SCREENIS2>
          <td class="lista" align="center"><a href="<tag:uploaddir /><tag:torrent.screen2 />" title="view image" rel="lightbox"><img src="thumbnail.php?size=150&path=<tag:uploaddir /><tag:torrent.screen2 />"></a></td>
        </if:SCREENIS2>
        <if:SCREENIS3>
          <td class="lista" align="center"><a href="<tag:uploaddir /><tag:torrent.screen3 />" title="view image" rel="lightbox"><img src="thumbnail.php?size=150&path=<tag:uploaddir /><tag:torrent.screen3 />"></a></td>
        </if:SCREENIS3>
        </table>

        </td>
        </tr>
</if:screen>
        <if:EXTERNAL>
        <tr>
          <td valign="middle" align="right" class="header"><tag:torrent.update_url /></td>
          <td class="lista" align="center"><tag:torrent.announce_url /></td>
        </tr>
        <tr>
          <td valign="middle" align="right" class="header"><tag:language.LAST_UPDATE /></td>
          <td class="lista" align="center"><tag:torrent.lastupdate /> (<tag:torrent.lastsuccess />)</td>
        </tr>
        </if:EXTERNAL>

			
			





			
      </table>

<!-- #######################################################
     # view/edit/delete shout, comments -->
     
      <if:VIEW_COMMENTS>
      
            <script type="text/javascript">
                <!--
                function SetAllCheckBoxes(FormName, FieldName, CheckValue) {
                  if(!document.forms[FormName])
                  return;
                  var objCheckBoxes = document.forms[FormName].elements[FieldName];
                  if(!objCheckBoxes)
                  return;
                  var countCheckBoxes = objCheckBoxes.length;
                  if(!countCheckBoxes)
                  objCheckBoxes.checked = CheckValue;
                  else
                  // set the check value for all check boxes
                  for(var i = 0; i < countCheckBoxes; i++)
                  objCheckBoxes[i].checked = CheckValue;
                  document.forms[FormName].elements['all_down'].checked = CheckValue;
                }
                -->
            </script>
            
<form name="deleteallcomments" method="post" action="index.php?page=torrent-details&id=<tag:torrent.info_hash />">

<!-- # End
     ####################################################### --> 

	
      <a name="comments" />
      <br />
      <br />
      <table width="100%" class="lista">
        <if:INSERT_COMMENT>
        <tr>
          <td align="center" colspan="3">
             <a href="index.php?page=comment&amp;id=<tag:torrent.info_hash />&amp;usern=<tag:current_username />"><tag:language.NEW_COMMENT /></a>
          </td>
        </tr>
        </if:INSERT_COMMENT>
        <if:NO_COMMENTS>
        <tr>
          <td colspan="3" class="lista" align="center"><tag:language.NO_COMMENTS /></td>
        </tr>
        <else:NO_COMMENTS>
                <loop:comments>
        <tr>
        <td align="left" class="header" colspan="2">
        <table width="100%">
        

<!-- #######################################################
     # view/edit/delete shout, comments -->

          <td class="header" align="right"><tag:comments[].edit.delete />
          
<!-- # End
     ####################################################### --> 

	
        </table>
        </td>
        </tr>
        <tr>
        <td class="header" align="left" valign="top">
        <table width="140">
        <tr>
          <td>
          <tag:comments[].user />
          <br />
          <tag:comments[].date />
          <br />
          <tag:comments[].elapsed />
          <br />
          <tag:comments[].avatar />
          <br />
          <tag:comments[].ratio />
          <br />
          <tag:comments[].uploaded />
          <br />
          <tag:comments[].downloaded />
          </td>
        </tr>
        </table>
        </td>
        <td class="lista" width="100%" valign="top" style="padding:10px">
        <tag:comments[].comment /></td>
        </tr>
        </loop:comments>

        </if:NO_COMMENTS>
      </table>

<!-- #######################################################
     # view/edit/delete shout, comments -->

      <if:MASSDEL_COMMENTS>
                            <br /><div align="right" style="margin-right:8px;">
                            <input type="submit" class="btn" value="<tag:language.FRM_DELETE />" onclick="return confirm('If you are really sure you want to delete selected comments click OK, othervise Cancel!')" />
                            <input type="checkbox" class="btn" name="all_down" onclick="SetAllCheckBoxes('deleteallcomments','delcomment[]',this.checked)" />
                            </div>
      </if:MASSDEL_COMMENTS>
      
</form>      
    
      </if:VIEW_COMMENTS>
      
<!-- # End
     ####################################################### --> 

	
    </div>
    <br />
    <br />
    <div align="center">
      <tag:torrent_footer />
    </div>
