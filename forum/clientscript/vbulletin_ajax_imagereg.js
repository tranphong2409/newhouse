/*======================================================================*\
|| #################################################################### ||
|| # vBulletin 4.2.2
|| # ---------------------------------------------------------------- # ||
|| # Copyright �2000-2013 vBulletin Solutions Inc. All Rights Reserved. ||
|| # This file may not be redistributed in whole or significant part. # ||
|| # ---------------- VBULLETIN IS NOT FREE SOFTWARE ---------------- # ||
|| # http://www.vbulletin.com | http://www.vbulletin.com/license.html # ||
|| #################################################################### ||
\*======================================================================*/
function vB_AJAX_ImageReg(){this.init()}vB_AJAX_ImageReg.prototype.init=function(){if(AJAX_Compatible&&(typeof vb_disable_ajax=="undefined"||vb_disable_ajax<2)&&YAHOO.util.Dom.get("refresh_imagereg")){YAHOO.util.Event.on("refresh_imagereg","click",this.fetch_image,this,true);YAHOO.util.Dom.removeClass("refresh_imagereg","hidden");YAHOO.util.Event.on("imagereg","click",this.fetch_image,this,true)}};vB_AJAX_ImageReg.prototype.fetch_image=function(A){YAHOO.util.Event.stopEvent(A);YAHOO.util.Dom.removeClass("progress_imagereg","hidden");YAHOO.util.Connect.asyncRequest("POST",fetch_ajax_url("ajax.php?do=imagereg"),{success:this.handle_ajax_response,failure:this.handle_ajax_error,timeout:vB_Default_Timeout,scope:this},SESSIONURL+"securitytoken="+SECURITYTOKEN+"&do=imagereg&hash="+YAHOO.util.Dom.get("hash").getAttribute("value"));return false};vB_AJAX_ImageReg.prototype.handle_ajax_error=function(A){vBulletin_AJAX_Error_Handler(A)};vB_AJAX_ImageReg.prototype.handle_ajax_response=function(B){YAHOO.util.Dom.addClass("progress_imagereg","hidden");if(B.responseXML){var A=B.responseXML.getElementsByTagName("error");if(A.length){alert(A[0].firstChild.nodeValue)}else{var C=B.responseXML.getElementsByTagName("hash")[0].firstChild.nodeValue;if(C){YAHOO.util.Dom.get("hash").setAttribute("value",C);YAHOO.util.Dom.get("imagereg").setAttribute("src","image.php?"+SESSIONURL+"type=hv&hash="+C)}}}};function vB_AJAX_ImageReg_Init(){new vB_AJAX_ImageReg()};