import java.io.IOException;
import java.util.Scanner;
import java.util.Arrays;
 
/**
 * IMPORTANT: 
 *      O nome da classe deve ser "Main" para que a sua solução execute
 *      Class name must be "Main" for your solution to execute
 *      El nombre de la clase debe ser "Main" para que su solución ejecutar
 */
public class Main {
 
    public static void main(String[] args) throws IOException {
 
        /**
         * Escreva a sua solução aqui
         * Code your solution here
         * Escriba su solución aquí
         */

         Scanner leitura = new Scanner(System.in);

         double M[][] = new double[12][12];

         int L = leitura.nextInt();

         char T = leitura.next().charAt(0);

         int contador = 0;

         for (double valores[]: M) {

            for (double valor: valores) {
                
                valor = contador;

                contador++;

            }

         }

         if (T == 'S') {

            double vetor[] = M[L];


            for (double valor: vetor) {

                
            }
         }

         else if (T == 'M') {

            vetor = M[L];

         }

 
    }
 
}