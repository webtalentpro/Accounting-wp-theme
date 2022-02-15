<form action="<?php echo esc_url(home_url()); ?>" class="search-form" method="get">
     <div class="form-group">
     
       
     <input type="text" class="form-control" name="s" placeholder="Search Keyword"  onfocus="if ( this.value == 'Search'){this.value='';}" onblur= "if(this.value == '') {this.value = 'Search';}">
       
       
           <button type="submit"> <span class="fa fa-search"></span> </button>
     </div>
 </form>