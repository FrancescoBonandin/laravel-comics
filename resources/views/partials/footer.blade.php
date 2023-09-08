

<ul>
    
    @foreach (explode(' ','Lorem ipsum dolor sit amet consectetur.') as $link)
    
        <li>

            <a href="">
                
                {{" $link "}}
            
            </a>

        </li>
        
    @endforeach

</ul>
