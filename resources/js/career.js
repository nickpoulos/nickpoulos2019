let array1 = [11,4,7,22,12,3,1,5];

let bubbleSort = (arr) => {

    let n = arr.length;

    if (n === 1) {
        return;
    }

    for (let i = 0; i < n; i++) {
        for (let j = 0; j < n - i - 1; j++) {
            let tmp = arr[j];
            if (arr[j] > arr[j+1]) {
                arr[j] = arr[j+1];
                arr[j+1] = tmp;
            }
        }
    }

    return arr;
};

let mergeSort = (arr) => {

    let n = arr.length;

    if (n === 1) return arr;

    let half = arr.splice(Math.floor(n/2));

    arr = mergeSort(arr.slice(0));
    half = mergeSort(half.slice(0));

    let result = [];

    while (arr.length > 0 || half.length > 0) {
        if (arr.length === 0 || half.length === 0) {
            result.push(arr.length === 0 ? half.shift():arr.shift());
        } else {
            result.push(arr[0] > half[0] ? half.shift():arr.shift());
        }
    }

    return result;
};

let quickSort = (arr) => {

    let n = arr.length;

    if (n < 2) {
        return arr;
    }

    let pivot = arr.shift();
    let loe = [];
    let gt  = [];


    arr.forEach((item, index) => {
        if (item <= pivot) {
            loe.push(item);
        } else if (item > pivot) {
            gt.push(item);
        }
    });

    return [
        ...quickSort(loe.slice(0)),
        pivot,
        ...quickSort(gt.slice(0))
    ];
};

console.log(quickSort(array1));


console.log(bubbleSort(array1));
console.log(mergeSort(array1));