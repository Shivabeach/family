<body>
<nav class="nav1 item">
    <ul class="sf-menu">
      <li class="line"><a href="http://localhost/family/"><i class="fa fa-home fa-lg">&nbsp;Home</a></i></li>
      <li class="line"><a href="#">VanHorns </a>
      	<ul>
        	<li><?php echo anchor('pages/van','VanHorn History');?> </li>
        	<li><?php echo anchor('pages/vandna','DNA');?></li>
        	<li><?php echo anchor('pages/vannames','Names');?></li>
          <li><?php echo anchor('pages/vanlinks','Family Links');?></li>
        </ul>     
      </li> 
      <li class="line"><a href="#"> Bosticks </a>
		<ul>
			<li><?php echo anchor('pages/bos','Bostick History');?></li>
			<li><?php echo anchor('pages/bosdna','Bostick MDNA');?></li>
			<li><?php echo anchor('pages/bosnames','Bostick Names');?></li>
      <li><?php echo anchor('pages/boslinks','Family Links');?></li>
		</ul>
      </li>
      <li class="line"><?php echo anchor('pages/dat','Names');?></li>
        <li class="line"><a href="#"> Timelines </a>
        <ul>
          <li class="line"><?php echo anchor('pages/timeline','VanHorn');?></li>
          <li class="line"><?php echo anchor('pages/timeline','Hunt');?></li>
          <li class="line"><?php echo anchor('pages/timeline','Bostick');?></li>
          <li class="line"><?php echo anchor('pages/timeline','Reed');?></li>
        </ul>     
	  <li class="line"><?php echo anchor('pages/fam', 'Family Insert');?></li>
    <li class="line"><?php echo anchor('pages/namer', 'Family Names');?></li>
    <li class="line"><?php echo anchor('pages/notes', 'Notes');?></li>
    <li class="line"><?php echo anchor('pages/datapages', 'Data');?></li>    
    <li class="line"><?php echo anchor('mycal/display', 'Calendar');?></li>  
    <li class="line"><?php echo anchor('test/', 'Test');?></li>
    <li class="line"><?php echo anchor('pages/style', 'Style');?></li>
    <li class="line"><?php echo anchor('pages/military', 'Military');?></li>
    </ul>
</nav>
