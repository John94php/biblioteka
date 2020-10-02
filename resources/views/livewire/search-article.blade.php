<div>
@if($_POST['q=title'])
    <p>Wpisany przez Ciebie tytuł to:</p>
    @elseif($_POST['q=isbn'])
    <p>Wpisany przez Ciebie numer ISBN to:</p>
    @elseif($_POST['q=author'])
    <p>Wpisany przez Ciebie autor to:</p>
</div>
