<?php
if($this->session->userdata('login') == false)
{
	redirect('user/login');
	exit;
}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?php if(isset($meta_title)): ?><?php echo $meta_title; ?> | TilPark! <?php else: ?>TilPark! | Açık Kaynak Kodlu Web Tabanlı Otomasyon Sistemi<?php endif; ?></title>
<meta name="description" content="TilPark! Açık Kaynak Kodlu Web Tabanlı Otomasyon Sistemi">

<link rel="shortcut icon" href="<?php echo base_url('theme/img/logo/favicon.png'); ?>">

<!-- Included CSS Files (Compressed) -->
<link rel="stylesheet" href="<?php echo base_url('theme/css/bootstrap.css'); ?>">

<link rel="stylesheet" href="<?php echo base_url('theme/css/datepicker.css'); ?>">
<link rel="stylesheet" href="<?php echo base_url('theme/js/dataTable/css/TableTools.css'); ?>">
<link rel="stylesheet" href="<?php echo base_url('theme/css/lightbox.css'); ?>">
<link rel="stylesheet" href="<?php echo base_url('theme/css/app.css'); ?>">


<!-- Le javascript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="<?php echo base_url('theme/js/jquery.js'); ?>"></script>
<script src="<?php echo base_url('theme/js/bootstrap.js'); ?>"></script> 
<script src="<?php echo base_url('theme/js/jquery.validation.js'); ?>"></script> 

<script src="<?php echo base_url('theme/js/bootstrap-datepicker.js'); ?>"></script> 


<script src="<?php echo base_url('theme/js/jquery.dataTables.js'); ?>"></script> 
<script src="<?php echo base_url('theme/js/dataTable/js/ZeroClipboard.js'); ?>"></script> 
<script src="<?php echo base_url('theme/js/dataTable/js/TableTools.js'); ?>"></script>

<script src="<?php echo base_url('theme/js/lightbox-2.6.min.js'); ?>"></script>

<script src="<?php echo base_url('theme/js/bootstrap-notify.js'); ?>"></script>
<!-- Initialize JS Plugins -->
<script src="<?php echo base_url('theme/js/app.js'); ?>"></script>


<script>
$(document).ready( function() {
	
	/* datatable */
	var exportName = $('.dataTable').attr("exportname");
	if(exportName == null)
	{
		exportName = '<?php echo $this->uri->segment(2); ?>';
	}
	
	exportName = exportName +'_tilpark_'+'<?php echo date('YmdHis'); ?>';
	
	$('.dataTable').dataTable({<?php $this->load->view('system/import_button'); ?>});
	$('.dataTable1').dataTable({<?php $this->load->view('system/import_button'); ?>});
	$('.dataTable2').dataTable({<?php $this->load->view('system/import_button'); ?>});
	$('.dataTable3').dataTable({<?php $this->load->view('system/import_button'); ?>});
	$('.dataTable4').dataTable({<?php $this->load->view('system/import_button'); ?>});
	$('.dataTable5').dataTable({<?php $this->load->view('system/import_button'); ?>});
	
	
	$('.dataTable_noLength').dataTable({
		
		"sDom": " <'row'<'col-md-6 hidden-xs hidden-sm'T><'col-md-6'f>>rt<'row'<'col-md-6 hidden-xs hidden-sm'i><'col-md-6'p>>",
		"bJQueryUI": false,
		"sPaginationType": "full_numbers",
        "oTableTools": {
            "sSwfPath": "<?php echo base_url('theme/js/dataTable/swf/copy_csv_xls_pdf.swf'); ?>",
			"aButtons": [
				{
					"sExtends": "xls",
					"sFileName": exportName + "_excel.csv",
					"sButtonText": "Excel"
				},
				{
					"sExtends": "csv",
					"sFileName":  exportName + ".csv",
					"sButtonText": "CSV"
				},
				{
					"sExtends": "pdf",
					"sFileName": exportName + ".pdf",
					"sButtonText": "PDF"
				},
				{
					"sExtends": "copy",
					"sButtonText": "<?php lang('Copy'); ?>"
				},
				{
					"sExtends": "print",
					"sButtonText": "<?php lang('Print'); ?>"
				}
			]
        }
    });
	
	
	
	$('.dataTable_noExcel').dataTable({
		"sDom": " <'row'<'col-md-6 hidden-xs hidden-sm'l><'col-md-6'f>>rt<'row'<'col-md-6 hidden-xs hidden-sm'i><'col-md-6'p>>",
		"bJQueryUI": false,
		"sPaginationType": "full_numbers"
    });
	
	$('.dataTable_noExcel_noLength').dataTable({
		"sDom": " <'row'<'col-md-12'f>>rt<'row'<'col-md-6 hidden-xs hidden-sm'i><'col-md-6'p>>",
		"bJQueryUI": false,
		"sPaginationType": "full_numbers"
    });
	
	$('.dataTable_noExcel_noLength_noInformation').dataTable({
		"sDom": " <'row'<'col-md-12'f>>rt<'row'<'col-md-12'p>>",
		"bJQueryUI": false,
		"sPaginationType": "full_numbers"
    });
	
	$('.dataTable_noExcel_noLength_noSearch').dataTable({
		"sDom": "rt<'row'<'col-md-6 hidden-xs hidden-sm'i><'col-md-6'p>>",
		"bJQueryUI": false,
		"sPaginationType": "full_numbers"
    });
	
});
</script>


</head>
<body>



<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          
          	<a class="logo hidden-sm hidden-xs" href="<?php echo site_url(''); ?>">
            	<span style="color:#346c9b;">[</span> <span>tilpark!</span> 
                <span style="color:#346c9b; font-size:40px; margin-left:16px; margin-top:2px; position:absolute;">]</span>
            	<span class="note">açık kaynak</span>
			</a>
        </div>
        
        <div class="liner pull-left hidden-sm hidden-xs"></div>
        
        
        
        <div class="navbar-collapse collapse">
          	
            
            <ul class="nav navbar-nav">
            <li class="dropdown">
              <a id="drop1" href="#" role="button" class="dropdown-toggle active_product" data-toggle="dropdown"><i class="fa fa-share-square-o"></i> Stok <b class="caret"></b></a>
              <ul class="dropdown-menu" role="menu" aria-labelledby="drop1">
                <li role="presentation"><a role="menuitem" tabindex="-1" href="<?php echo site_url('product'); ?>"><i class="fa fa-share-square-o"></i> Stok Yönetimi</a></li>
                <li role="presentation" class="divider"></li>
                <li role="presentation"><a role="menuitem" tabindex="-1" href="<?php echo site_url('product/add'); ?>"><i class="fa fa-plus"></i> Yeni Stok Kartı</a></li>
                <li role="presentation"><a role="menuitem" tabindex="-1" href="<?php echo site_url('product/lists'); ?>"><i class="fa fa-bars"></i> Stok Kartları</a></li>
                
                <li role="presentation" class="divider"></li>
                <li role="presentation"><a role="menuitem" tabindex="-1" href="<?php echo site_url('product/options'); ?>"><i class="fa fa-gear"></i> Seçenekler</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" id="drop2" role="button" class="dropdown-toggle active_account" data-toggle="dropdown"><i class="fa fa-users"></i> Hesap <b class="caret"></b></a>
              <ul class="dropdown-menu" role="menu" aria-labelledby="drop2">
                <li role="presentation"><a role="menuitem" tabindex="-1" href="<?php echo site_url('account'); ?>"><i class="fa fa-users"></i> Hesap Yönetimi</a></li>
                <li role="presentation" class="divider"></li>
                <li role="presentation"><a role="menuitem" tabindex="-1" href="<?php echo site_url('account/add'); ?>"><i class="fa fa-plus"></i> Yeni Hesap Kartı</a></li>
                <li role="presentation"><a role="menuitem" tabindex="-1" href="<?php echo site_url('account/lists'); ?>"><i class="fa fa-bars"></i> Hesap Kartları</a></li>
                
                <li role="presentation" class="divider"></li>
                <li role="presentation"><a role="menuitem" tabindex="-1" href="<?php echo site_url('account/options'); ?>"><i class="fa fa-gear"></i> Seçenekler</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" id="drop2" role="button" class="dropdown-toggle active_form" data-toggle="dropdown"><i class="fa fa-external-link"></i> Formlar <b class="caret"></b></a>
              <ul class="dropdown-menu" role="menu" aria-labelledby="drop2">
              	<li role="presentation"><a role="menuitem" tabindex="-1" href="<?php echo site_url('form'); ?>"><i class="fa fa fa-external-link"></i> Form Yönetimi</a></li>
              	<li role="presentation" class="divider"></li>
                <li role="presentation"><a role="menuitem" tabindex="-1" href="<?php echo site_url('form/view/0?out'); ?>"><i class="fa fa-shopping-cart"></i> Yeni Satış Formu</a></li>
                <li role="presentation"><a role="menuitem" tabindex="-1" href="<?php echo site_url('form/view/0?in'); ?>"><i class="fa fa-shopping-cart"></i> Yeni Alış Formu</a></li>
                <li role="presentation"><a role="menuitem" tabindex="-1" href="<?php echo site_url('form/lists'); ?>"><i class="fa fa-bars"></i> Form Listesi</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" id="drop2" role="button" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-try"></i> Kasa <b class="caret"></b></a>
              <ul class="dropdown-menu" role="menu" aria-labelledby="drop2">
                <li role="presentation"><a role="menuitem" tabindex="-1" href="http://twitter.com/fat">Action</a></li>
                <li role="presentation"><a role="menuitem" tabindex="-1" href="http://twitter.com/fat">Another action</a></li>
                <li role="presentation"><a role="menuitem" tabindex="-1" href="http://twitter.com/fat">Something else here</a></li>
                <li role="presentation" class="divider"></li>
                <li role="presentation"><a role="menuitem" tabindex="-1" href="http://twitter.com/fat">Separated link</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" id="drop2" role="button" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-tags"></i> Eklentiler <b class="caret"></b></a>
              <ul class="dropdown-menu" role="menu" aria-labelledby="drop2">
                <li role="presentation"><a role="menuitem" tabindex="-1" href="http://twitter.com/fat">Action</a></li>
                <li role="presentation"><a role="menuitem" tabindex="-1" href="http://twitter.com/fat">Another action</a></li>
                <li role="presentation"><a role="menuitem" tabindex="-1" href="http://twitter.com/fat">Something else here</a></li>
                <li role="presentation" class="divider"></li>
                <li role="presentation"><a role="menuitem" tabindex="-1" href="http://twitter.com/fat">Separated link</a></li>
              </ul>
            </li>
          </ul>
            
            <div class="btn-group navbar-right infoBtn">
                <button type="button" class="btn btn-default"><i class="fa fa-gears"></i></button>
            
                <ul class="nav navbar-nav">
            <li class="dropdown">
              <a id="drop1" href="#" role="button" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-share-square-o"></i> Profilim <b class="caret"></b></a>
              <ul class="dropdown-menu" role="menu" aria-labelledby="drop1">
                <li role="presentation"><a role="menuitem" tabindex="-1" href="http://twitter.com/fat">Action</a></li>
                <li role="presentation"><a role="menuitem" tabindex="-1" href="http://twitter.com/fat">Another action</a></li>
                <li role="presentation"><a role="menuitem" tabindex="-1" href="http://twitter.com/fat">Something else here</a></li>
                <li role="presentation" class="divider"></li>
                <li role="presentation"><a role="menuitem" tabindex="-1" href="http://twitter.com/fat">Separated link</a></li>
              </ul>
            </li>
          </ul>
            </div> <!-- /.btn-group navbar-right -->
            
            <div class="liner navbar-right hidden-sm hidden-xs"></div>
            
            <div class="btn-group navbar-right infoBtn hidden-sm hidden-xs">
                <button type="button" class="btn btn-default"><i class="fa fa-globe"></i></button>
                <button type="button" class="btn btn-default"><i class="fa fa-envelope"></i></button>
                <button type="button" class="btn btn-default"><i class="fa fa-tasks"></i></button>
            </div>
            
            <div class="liner navbar-right"></div>
            
          
          
          	
          
        </div>
        
        
        
      </div> <!-- /.container-fluid -->
    </div> <!-- /.navbar -->




<div class="container-fluid bg">
	<div class="row" style="margin-right:0px;">
    	<div class="col-md-2 hidden-xs hidden-sm" style="padding-right:0px;">
        	<div class="sidebar">
            	<div class="h10"></div>
                <div class="clearfix"></div>
                
                <div class="profile">
					<a href="<?php echo site_url(); ?>" class="avatar"><img src="http://cdn.mosaicpro.biz/quickadmin/php/assets/images/avatar-large.jpg" class="avatar" /></a>
                    <div class="text">
                    	merhaba, <br />
                        <a href="">mustafa</a>
                    </div>
                    <div class="btn-group">
                      <button type="button" class="btn btn-default"><i class="fa fa-globe"></i></button>
                      <button type="button" class="btn btn-default"><i class="fa fa-envelope"></i></button>
                      <button type="button" class="btn btn-default"><i class="fa fa-tasks"></i></button>
                      <button type="button" class="btn btn-default"><i class="fa fa-unlock-alt"></i></button>
                      <button type="button" class="btn btn-default"><i class="fa fa-times"></i></button>
                    </div>
           
                </div> <!-- /.profile -->
                <div class="clearfix"></div>
                <div class="h10"></div>
                
                <div class="liner"></div>
                
                <div class="searchbox">
                	<div class="input-group">
                      <span class="input-group-addon"><i class="fa fa-search"></i></span>
                      <input type="text" class="form-control" placeholder="arama kutusu...">
                    </div>
                </div> <!-- /.searchbox -->
                
                <div class="liner"></div>
                
            	<ul class="nav nav-pills nav-stacked nav-bracket">
                    <li class="active_"><a href="index.html"><i class="fa fa-home"></i> <span>Yönetim Paneli</span></a></li>
                    <li class="nav-parent active_product"><a href="" class="menu-parent"><i class="fa fa-share-square-o"></i> <span>Stok Yönetimi</span> <span class="naviicon"><i class="fa fa-plus"></i></span></a>
                      <ul style="display: none;" class="children">
                        <li><a href="<?php echo site_url('product'); ?>"><i class="fa fa-caret-right"></i> Stok Yönetimi</a></li>
                        <li><a href="<?php echo site_url('product/add'); ?>"><i class="fa fa-caret-right"></i> Yeni Stok Kartı</a></li>
                        <li><a href="<?php echo site_url('product/lists'); ?>"><i class="fa fa-caret-right"></i> Stok Kartları</a></li>
                        <li><a href="<?php echo site_url('product/options'); ?>"><i class="fa fa-caret-right"></i> Seçenekler</a></li>
                      </ul>
                    </li>
                    <li class="nav-parent active_account"><a href="" class="menu-parent"><i class="fa fa-users"></i> <span>Hesap Yönetimi</span> <span class="naviicon"><i class="fa fa-plus"></i></span></a>
                      <ul style="display: none;" class="children">
                        <li><a href="<?php echo site_url('account'); ?>"><i class="fa fa-caret-right"></i> Hesap Yönetimi</a></li>
                        <li><a href="<?php echo site_url('account/add'); ?>"><i class="fa fa-caret-right"></i> Yeni Hesap Kartı</a></li>
                        <li><a href="<?php echo site_url('account/lists'); ?>"><i class="fa fa-caret-right"></i> Hesap Kartları</a></li>
                        <li><a href="<?php echo site_url('account/options'); ?>"><i class="fa fa-caret-right"></i> Seçenekler</a></li>
                      </ul>
                    </li>
                    <li class="nav-parent active_form"><a href="" class="menu-parent"><i class="fa fa-external-link"></i> <span>Formlar &amp; Satış</span> <span class="naviicon"><i class="fa fa-plus"></i></span></a>
                      <ul style="display: none;" class="children">
                        <li><a href="<?php echo site_url('form'); ?>"><i class="fa fa-caret-right"></i> Form Yönetimi</a></li>
                        <li><a href="<?php echo site_url('form/view/0?out'); ?>"><i class="fa fa-caret-right"></i> Yeni Satış Formu</a></li>
                        <li><a href="<?php echo site_url('form/view/0?in'); ?>"><i class="fa fa-caret-right"></i> Yeni Alış Formu</a></li>
                        <li><a href="<?php echo site_url('form/lists'); ?>"><i class="fa fa-caret-right"></i> Form Listesi</a></li>
                      </ul>
                    </li>
                    <li class=""><a href="tables.html"><i class="fa fa-th-list"></i> <span>Kasa &amp; Nakit</span></a></li>
                    <li><a href="maps.html"><i class="fa fa-map-marker"></i> <span>Eklentiler</span></a></li>
                    <li class="nav-parent"><a href="" class="menu-parent"><i class="fa fa-file-text"></i> <span>Ayarlar</span></a>
                      <ul style="display: none;" class="children">
                        <li><a href="calendar.html"><i class="fa fa-caret-right"></i> Calendar</a></li>
                        <li><a href="media-manager.html"><i class="fa fa-caret-right"></i> Media Manager</a></li>
                        <li><a href="timeline.html"><i class="fa fa-caret-right"></i> Timeline</a></li>
                        <li><a href="blog-list.html"><i class="fa fa-caret-right"></i> Blog List</a></li>
                        <li><a href="blog-single.html"><i class="fa fa-caret-right"></i> Blog Single</a></li>
                        <li><a href="people-directory.html"><i class="fa fa-caret-right"></i> People Directory</a></li>
                        <li><a href="profile.html"><i class="fa fa-caret-right"></i> Profile</a></li>
                        <li><a href="invoice.html"><i class="fa fa-caret-right"></i> Invoice</a></li>
                        <li><a href="search-results.html"><i class="fa fa-caret-right"></i> Search Results</a></li>
                        <li><a href="blank.html"><i class="fa fa-caret-right"></i> Blank Page</a></li>
                        <li><a href="notfound.html"><i class="fa fa-caret-right"></i> 404 Page</a></li>
                        <li><a href="locked.html"><i class="fa fa-caret-right"></i> Locked Screen</a></li>
                        <li><a href="signin.html"><i class="fa fa-caret-right"></i> Sign In</a></li>
                        <li><a href="signup.html"><i class="fa fa-caret-right"></i> Sign Up</a></li>
                      </ul>
                    </li>
                    
                  </ul>
                  
                  <script>
        $('.children').hide();
        
        $('.nav-parent a.menu-parent').click(function() {
            
            if($(this).parent().hasClass('nav-active')) 
            {
                $(this).parent().removeClass('nav-active');
                $(this).parent().find('.children').hide('blonde');
                $(this).find('.naviicon .fa').removeClass('fa-minus');
                $(this).find('.naviicon .fa').addClass('fa-plus');
                return false;
            }
            else
            {
                $('.children').hide('blonde');
                $('.naviicon .fa').removeClass('fa-minus');
                $('.naviicon .fa').addClass('fa-plus');
                $('.nav-parent').removeClass('nav-active');
                
                $(this).parent().addClass('nav-active');
                $(this).parent().find('.children').show('blonde');
                $(this).find('.naviicon .fa').removeClass('fa-plus');
                $(this).find('.naviicon .fa').addClass('fa-minus');
                return false;
            }
        });
        </script>
        		
                
                
                <div class="h10"></div>
                <div class="liner"></div>
				<div class="h10"></div>
                
                
                <div class="pull-left">
                    <div class="exchange">
                        <i class="fa fa-usd text-success"></i><div class="value"><span class="text-danger">1,890<small>.49 </small></span></div>
                        <div class="title">USD döviz kuru</div>
                    </div>
                </div>
                <div class="pull-right">
                    <div class="exchange">
                        <i class="fa fa-euro text-primary"></i><div class="value"><span class="text-danger">2,369<small>.20 </small></span></div>
                        <div class="title">EURO döviz kuru</div>
                    </div>
                </div>

                
            </div> <!-- /.sidebar -->
        </div> 
        <div class="col-md-10">
    
    
    <div class="content">
    
    
<script>
$(document).ready(function(e) {
    $('.active_<?php echo $this->uri->segment(1); ?>').addClass('active');
	$('.active_<?php echo $this->uri->segment(1); ?> a').click();
});
</script>





