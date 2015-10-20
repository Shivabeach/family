<body>
<nav class="nav1 item">
    <ul  class="sf-menu">
      <li class="line"><?php echo anchor('/','Home');?></li>
      <li class="line"><a href="#">VanHorns </a>
      	<ul>
        	<li><?php echo anchor('pages/van','VanHorn History');?> </li>
        	<li><?php echo anchor('pages/vandna','DNA');?></li>
        	<li><?php echo anchor('pages/names','Names');?></li>
        </ul>     
      </li> 
      <li class="line"><a href="#"> Bosticks </a>
		<ul>
			<li><?php echo anchor('pages/bos','Bostick History');?></li>
			<li><?php echo anchor('pages/bosdna','DNA');?></li>
			<li><?php echo anchor('pages/names','Names');?></li>
		</ul>
      </li>
      <li class="line"><?php echo anchor('pages/dat','Data');?></li>
      <li class="line"><?php echo anchor('pages/dna','DNA');?></li>
	  <li class="line"><?php echo anchor('pages/fam', 'Family Insert');?></li>
      
    </ul>
</nav>