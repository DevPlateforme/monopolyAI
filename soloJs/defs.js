function calculateSetValue(setArray){


    let color = setArray[0].color;

    let colorScore = color.score;

    let value = 0;



    for(propertyIndex = 0; propertyIndex < setArray.length; propertyIndex++){


        let property = setArray[propertyIndex];
    
    
        value += property.value;
    
    
    }


    

    let setValue = value * colorScore;



    return setValue;


}






function createPostGainsSet(currentSet, gains){


    let newSet = currentSet.slice(0);
   
    
    for(i=0; i< gains.length ;i++){

      newSet.push(array[i]);

    }


    return newSet;


}