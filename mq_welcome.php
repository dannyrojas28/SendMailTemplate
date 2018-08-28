<?php

$welcome = $_POST['welcome'];

?>

<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>PHPtemplet</title>
  <style type="text/css">
	  	.content {
		    max-width: 670px;
		    width: 100%;
		    margin: auto;
	  	}

	  	.templateHead{
	  		background:url(img/header.png);
	  		background-size: 100% ;
	  		background-repeat: no-repeat;
	  	}
	  	.templateCont{
	  		background:url(img/body.png);
	  		background-size: 100% 100%;
	  		background-repeat: no-repeat;
	  	}
	  	.templateFoot{
	  		background:url(img/footer.png);
	  		background-size: 100% ;
	  		background-repeat: no-repeat;
	  	}

	  	.welcome{
	  		font-size: 25px;
	  		color:#fff;
	  		font-family: Arial, Helvetica, sans-serif; 
	  		font-weight: normal; 
	  		line-height: 140%;
	  	}

	  	p,h3,span{
	  		text-align: center;
	  		color: #696868;
	  		font-family: 'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', Helvetica, Arial, sans-serif;
	  		
	  	}

	    .UpdateData{
	    	background: orange;
	    	color: #fff;
	    	text-align: center;
		    margin-left:32%;
		    border: none;
		    font-size: 20px;
		    border-radius: 23px;
		    height: 40px;
		    /*background-image: url( 'img/botón-plantilla.png' );
		    background-size: 219px 54px;
		    background-repeat: no-repeat;
		    height: 51px;
		    width: 259px;
		    color: orange;
		    text-align: center;
		    margin-left: 32%;
		    border: none;
		    font-size: 16px;
		    border-radius: 23px;*/
	    }
    	
    	span{
    		font-weight: 100;
    		font-size: 14px;
    	}
    	h3{
    		font-size: 16px;
    		margin-top: -7px;
    	}
  </style>
</head>
<body>
<div class="content" >
	<table width="100%" cellspacing="0" cellpadding="0" border="0" name="bmeMainBody" class="template" >
		<tbody>
			<tr>
				<td width="100%" valign="top" align="center">    
					<table cellspacing="0" cellpadding="0" border="0" name="bmeMainColumnParentTable" style="border-collapse: separate; border-spacing: 0px;" width="100%">
						<tbody>
							
							<tr>
								<td width="100%" class="blk_container bmeHolder" name="bmeFooter" valign="top" align="center" style="color: rgb(102, 102, 102); border: 0px none transparent; " >
									<div id="dv_10" class="blk_wrapper">    
										<table width="600" cellspacing="0" cellpadding="0" border="0" class="blk templateHead" name="blk_permission" style="">
											<tbody>
												<tr>
													<td name="tblCell" class="tblCell" style="padding:20px;" valign="top" align="left">    
														<table cellpadding="0" cellspacing="0" border="0" width="100%">
															<tbody>
																<tr>
																	<td name="bmePermissionText" style="text-align:left;" align="left">
																		<div style="line-height: 150%;margin-left: 160px;margin-top: 55px;" >
																			<span class="welcome">    
																				<strong><?php echo $welcome; ?></strong><br>  
																			</span>
																		</div>
																	</td>
																</tr>
															</tbody>    
														</table>
													</td>
												</tr>
											</tbody>    
										</table>
									</div>
									<div id="dv_20" class="blk_wrapper" style="">    
										<table width="600" cellspacing="0" cellpadding="0" border="0" class="blk templateCont" name="blk_footer" style="">
											<tbody>
												<tr>
													<td name="tblCell" class="tblCell" style="padding:20px;" valign="top" align="left">    
														<table cellpadding="0" cellspacing="0" border="0" width="100%">
															<tbody>
																<tr>
																	<td name="bmeBadgeText" style="text-align:left; word-break: break-word;" align="left">   
																		<br>  
																		<?php echo $_POST['content']; ?>  
																	    	
																	</td>
																</tr>
															</tbody>    
														</table>
													</td>
												</tr>
											</tbody>    
										</table>
									</div>
								</td>
							</tr>
							<tr>
									<table width="600" cellspacing="0" cellpadding="0" border="0" class="blk templateFoot" name="blk_footer" style="">
											<tbody>
												<tr>
													<td name="tblCell" class="tblCell" style="padding:20px;" valign="top" align="left">    
														<table cellpadding="0" cellspacing="0" border="0" width="100%">
															<tbody>
																<tr>
																	<br><br><br><br>   
																	<br><br><br><br>   
																	<br><br><br><br>   
																</tr>
															</tbody>    
														</table>
													</td>
												</tr>
											</tbody>    
										</table>
										
							</tr>
						</tbody>    
					</table>   
				</td>
			</tr>
		</tbody>    
	</table>
	<br><p><? echo $_POST['footer']; ?></p>
</div>
</body>
</html>