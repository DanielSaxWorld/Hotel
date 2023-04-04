<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Dropdown</title>
</head>
<body>

<script language="javascript" type="text/javascript">
    function dynamicdropdown(listindex)
    {
        switch (listindex)
        {
        case "Deluxe Twin Room" :
            document.getElementById("status").options[0]=new Option("25,000","25,000");
            break;
        case "Deluxe Suite" :
            document.getElementById("status").options[0]=new Option("18,000","18,000");
            break;
		case "Kings Suite" :
            document.getElementById("status").options[0]=new Option("15,000","15,000");
            break;
		case "Executive Room" :
            document.getElementById("status").options[0]=new Option("10,000","10,000");
            break;
		case "Single Room" :
            document.getElementById("status").options[0]=new Option("7,000","7,000");
            break;
        }
        return true;
    }
    </script>
    </head>
    <title>Dynamic Drop Down List</title>
    <body>
    <div class="category_div" id="category_div">
    Select Room:
        <select id="source" name="source" onchange="javascript: dynamicdropdown(this.options[this.selectedIndex].value);">
        <option value="">--Select Room--</option>
        <option value="Deluxe Twin Room">Deluxe Twin Room</option>
        <option value="Deluxe Suite">Deluxe Suite</option>
        <option value="Kings Suite">Kings Suite</option>
        <option value="Executive Room">Executive Room</option>
        <option value="Single Room">Single Room</option>
        </select>
    </div>
    <div class="sub_category_div" id="sub_category_div">
    Room Price:
        <script type="text/javascript" language="JavaScript">
        document.write('<select name="status" id="status"><option value="">--Room Price--</option></select>')
        </script>
        
    </div>


</body>
</html>