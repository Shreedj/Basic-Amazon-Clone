document.getElementById('jumpbutton').addEventListener('click', function() {
    
    window.location.href = 'login.html';
});
function searchAmazon() {
    
    const searchTerm = document.getElementById('searchInput').value;

    
    if (searchTerm.trim() !== '') {
        
        const amazonSearchUrl = `https://www.amazon.com/s?k=${encodeURIComponent(searchTerm)}`;

        window.location.href = amazonSearchUrl;
    }
}