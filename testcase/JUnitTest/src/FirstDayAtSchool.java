import java.util.Arrays;

public class FirstDayAtSchool {

    public String[] prepareMyBag() {
        String[] schoolbag = {"Books", "Notebooks", "Pens"};
        System.out.println("My school bag contains: "+Arrays.toString(schoolbag));
        return schoolbag;

    }
    
    public String[] addPencils() {
        String[] schoolbag = {"Books", "Notebooks", "Pens", "Pencils"};
        System.out.println("Now my school bag contains: "+Arrays.toString(schoolbag));
        return schoolbag;

    }
    
    public long addition() {
        long numb1 = 5;
        long numb2 = 7;
        long result = numb1 + numb2;
        System.out.println("The numbers to sum are: "+numb1+ " and "+numb2+". And the sum is: " +result);
        return result;

    }
    
}