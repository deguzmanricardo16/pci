using UnityEngine;
using UnityEngine.UI;
using UnityEngine.Events;
public class _choices : MonoBehaviour
{
    public bool isCorrect;
    Image img;
    Button btn;
    void Start() {
        btn=GetComponent<Button>();
        img=GetComponent<Image>();
        btn.onClick.AddListener(_sel);
        // img.color = _quizManager.This.correct;
    }

    public void _sel()
    {
        img.color = isCorrect ? _quizManager.This.correct : _quizManager.This.wrong;
    }
}