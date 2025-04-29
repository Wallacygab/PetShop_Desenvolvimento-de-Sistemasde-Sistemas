// Máscara para telefone
document.querySelector('input[name="telefone"]').addEventListener('input', function(e) {
    let value = e.target.value.replace(/\D/g, '');
    
    if(value.length > 2) {
        value = '(' + value.substring(0, 2) + ') ' + value.substring(2);
    }
    if(value.length > 10) {
        value = value.substring(0, 10) + '-' + value.substring(10, 14);
    }
    
    e.target.value = value;
});

// Máscara para data
document.querySelector('input[name="data"]').addEventListener('input', function(e) {
    let value = e.target.value.replace(/\D/g, '');
    
    if(value.length > 2) {
        value = value.substring(0, 2) + '/' + value.substring(2);
    }
    if(value.length > 5) {
        value = value.substring(0, 5) + '/' + value.substring(5, 9);
    }
    
    e.target.value = value;
});