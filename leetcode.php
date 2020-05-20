1.给定一个字符串，请你找出其中不含有重复字符的 最长子串 的长度。
示例 :
输入: "abcabcbb"
输出: 3 
解释: 因为无重复字符的最长子串是 "abc"，所以其长度为 3。

function lengthOfLongestSubstring($s) {

    $subStr  = '';
    $len = 0;
    for ($i = 0;$i < strlen($s);$i ++) {
        //如果在临时变量中不存在则直接存入
        $ret = strpos($subStr,$s[$i]);
        if($ret === false){
            $subStr .= $s[$i];
        }else{
            $subStr .= $s[$i];
            //abcabcbb  比如到了第二个a之后
            $subStr = substr($subStr,$ret+1);
        }
        $len =  strlen($subStr)>$len ? strlen($subStr):$len;
    }
    return $len;
}

2.给定两个大小为 m 和 n 的正序（从小到大）数组 nums1 和 nums2。
请你找出这两个正序数组的中位数，并且要求算法的时间复杂度为 O(log(m + n))。
你可以假设 nums1 和 nums2 不会同时为空。

示例 :
nums1 = [1, 3]
nums2 = [2]
则中位数是 2.0
function findMedianSortedArrays($nums1, $nums2) {
    $arr = array_merge($nums1,$nums2);
    sort($arr);
    $len = count($arr);
    if($len % 2 != 0) {  //奇数个，小标就是中位数
        $index = (int)$len / 2;
        $result = $arr[$index];
    }else {  //偶数个，小标是
        $index1 = (int)$len / 2;
        $index2 = $index1 - 1;
        $result = ($arr[$index1] + $arr[$index2]) / 2;
    }

}
