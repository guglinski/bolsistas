import static org.junit.Assert.*;
import org.junit.Test;

public class JunitTest3 {

   FirstDayAtSchool school = new FirstDayAtSchool();
   long soma = 12;
   //long soma = 13;

   @Test
   public void testAddition() {	
      System.out.println("Inside testAddition()");    
      assertEquals(soma, school.addition());     
   }
}