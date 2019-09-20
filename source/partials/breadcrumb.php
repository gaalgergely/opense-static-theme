<ol class="breadcrumb">
    <li class="breadcrumb-item">
        <a href="index.html">Home</a>
    </li>
    <?php switch($page){
        
        //GENERAL PAGES
        
        case 'services':
            echo "<li class=\"breadcrumb-item active\">Services</li>"; break;
        
        case 'about':
            echo "<li class=\"breadcrumb-item active\">About</li>"; break;
        
        case 'contact':
            echo "<li class=\"breadcrumb-item active\">Contact</li>"; break;
        
        
        //PORTFOLIO PAGES
        
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
        
        //BLOG PAGES
        
        case 'blog-home-1':
            echo "<li class=\"breadcrumb-item\">Blog</li>"; 
            echo "<li class=\"breadcrumb-item active\">Blog Home 1</li>"; 
        break;
        
        case 'blog-home-2':
            echo "<li class=\"breadcrumb-item\">Blog</li>"; 
            echo "<li class=\"breadcrumb-item active\">Blog Home 2</li>"; 
        break;
        
        case 'blog-single':
            echo "<li class=\"breadcrumb-item\">Blog</li>"; 
            echo "<li class=\"breadcrumb-item active\">Blog Item</li>"; 
        break;
        
        //OTHER PAGES
        case 'full-width':
            echo "<li class=\"breadcrumb-item\">Other Pages</li>"; 
            echo "<li class=\"breadcrumb-item active\">Full Width</li>"; 
        break;
        
        case 'sidebar':
            echo "<li class=\"breadcrumb-item\">Other Pages</li>"; 
            echo "<li class=\"breadcrumb-item active\">Sidebar Page</li>"; 
        break;
        
        case 'faq':
            echo "<li class=\"breadcrumb-item\">Other Pages</li>"; 
            echo "<li class=\"breadcrumb-item active\">FAQ</li>"; 
        break;
        
        case '404':
            echo "<li class=\"breadcrumb-item\">Other Pages</li>"; 
            echo "<li class=\"breadcrumb-item active\">404</li>"; 
        break;
        
        case 'pricing':
            echo "<li class=\"breadcrumb-item\">Other Pages</li>"; 
            echo "<li class=\"breadcrumb-item active\">Pricing</li>"; 
        break;
        
    } ?>
</ol>
