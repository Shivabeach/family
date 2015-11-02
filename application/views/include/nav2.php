<body>
<nav class="nav1 item">
    <ul  class="sf-menu">
      <li class="line"><?php echo anchor('/','Home');?></li>
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
      <li class="line"><?php echo anchor('pages/dat','Data');?></li>
      <li class="line"><?php echo anchor('pages/dna','DNA');?></li>
	  <li class="line"><?php echo anchor('pages/fam', 'Family Insert');?></li>
    <li class="line"><?php echo anchor('pages/notes', 'Notes');?></li>
      
    </ul>
</nav>