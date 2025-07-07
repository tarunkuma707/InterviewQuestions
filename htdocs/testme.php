<script>
function findMaxNumber(arr) {
    // Your implementation
   let maxnumber = - Infinity;
    if(arr.length>0){
        maxnumber = - Infinity;
        for (let i = 0; i < arr.length; i++) {
            if (arr[i] > maxnumber) {
                maxnumber = arr[i];
            }
        }
    }
    else{
        maxnumber = null;
    }
    console.log(maxnumber);
}

function reverseWords(sentence) {
    // Your implementation
    if(sentence.indexOf(" ")>0){
        var Sentencesplit = sentence.split(" ");
        console.log(Sentencesplit);
        for(let x=0;x<Sentencesplit.length;x++){
            
        }
    }
}

//For the purpose of user debugging.
reverseWords("Hello World");
reverseWords(" Lead and Trail ");

findMaxNumber([1, 2, 3, 4, 5]);
</script>