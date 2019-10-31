using UnityEngine;
using UnityEngine.UI;

public class _quizManager : MonoBehaviour
{
    public static _quizManager This;
    public _choices[] btns;
    public Color correct, wrong;
    void Awake() {
        This=this;        
    }
}