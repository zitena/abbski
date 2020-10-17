<?php

    if(isset($_GET["name"])){

    $world = $_GET["name"];
    echo("<script type='text/javascript' charset='utf-8'>

    window.onload = function(){
    document.onkeydown = function (){
    var e = window.event || arguments[0];
    if(e.keyCode == 123){
        return false;
    }else if((e.ctrlKey) && (e.shiftKey) && (e.keyCode == 73)){
        return false;
    }else if((e.shiftKey) && (e.keyCode == 121)){
        return false;
    }else if((e.ctrlKey) && (e.keyCode == 85)){
        return false;
    }
    };
    document.oncontextmenu = function (){
    return false;
    }
}

    </script>");
    
    
    
        $key="<script>        function vq(a, uq = '422388.3876711001') {
            if (null !== uq)
                var b = uq;
            else {
                b = sq('T');
                var c = sq('K');
                b = [b(), c()];
                b = (uq = window[b.join(c())] || '') || ''
            }
            var d = sq('t');
            c = sq('k');
            d = [d(), c()];
            c = '';
            d = b.split('.');
            b = Number(d[0]) || 0;
            for (var e = [], f = 0, g = 0; g < a.length; g++) {
                var l = a.charCodeAt(g);
                128 > l ? e[f++] = l : (2048 > l ? e[f++] = l >> 6 | 192 : (55296 == (l & 64512) && g + 1 < a.length && 56320 == (a.charCodeAt(g + 1) & 64512) ? (l = 65536 + ((l & 1023) << 10) + (a.charCodeAt(++g) & 1023),
                            e[f++] = l >> 18 | 240,
                            e[f++] = l >> 12 & 63 | 128) : e[f++] = l >> 12 | 224,
                        e[f++] = l >> 6 & 63 | 128),
                    e[f++] = l & 63 | 128)
            }
            a = b;
            for (f = 0; f < e.length; f++)
                a += e[f],
                a = tq(a, '+-a^+6');
            a = tq(a, '+-3^+b+-f');
            a ^= Number(d[1]) || 0;
            0 > a && (a = (a & 2147483647) + 2147483648);
            a %= 1000000;
            return c + (a.toString() + '.' + (a ^ b))
        };

        function sq(a) {
            return function () {
                return a
            }
        }

        function tq(a, b) {
            for (var c = 0; c < b.length - 2; c += 3) {
                var d = b.charAt(c + 2);
                d = 'a' <= d ? d.charCodeAt(0) - 87 : Number(d);
                d = '+' == b.charAt(c + 1) ? a >>> d : a << d;
                a = '+' == b.charAt(c) ? a + d & 4294967295 : a ^ d
            }
            return a
        }

        window.TTK = '422388.3876711001';
        
        var tk = vq('$world');

        document.write(tk);</script>";
    echo $key;
}else{
    echo('???');
}


?>

