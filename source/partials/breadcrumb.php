<ol class="breadcrumb">
    <li class="breadcrumb-item">
        <a href="/">Home</a>
    </li>
    <?php switch($page){
        
        case 'services':
            echo "<li class=\"breadcrumb-item active\">Services</li>"; break;
        
        case 'about':
            echo "<li class=\"breadcrumb-item active\">About</li>"; break;
        
        case 'contact':
            echo "<li class=\"breadcrumb-item active\">Contact</li>"; break;
        
        case 'portfolio-1-col':
            echo "<li class=\"breadcrumb-item\">Portfolio</li>"; 
            echo "<li class=\"breadcrumb-item active\">1 Column Portfolio</li>"; 
        break;
        
        case 'portfolio-2-col':
            echo "<li class=\"breadcrumb-item\">Portfolio</li>"; 
            echo "<li class=\"breadcrumb-item active\">2 Column Portfolio</li>"; 
        break;
        
        case 'portfolio-3-col':
            echo "<li class=\"breadcrumb-item\">Portfolio</li>"; 
            echo "<li class=\"breadcrumb-item active\">3 Column Portfolio</li>"; 
        break;
        
        case 'portfolio-4-col':
            echo "<li class=\"breadcrumb-item\">Portfolio</li>"; 
            echo "<li class=\"breadcrumb-item active\">4 Column Portfolio</li>"; 
        break;
        
        case 'portfolio-single':
            echo "<li class=\"breadcrumb-item\">Portfolio</li>"; 
            echo "<li class=\"breadcrumb-item active\">Portfolio Item</li>"; 
        break;
        
    } ?>
</ol>
