
@if(isset($statisticService))
    <div class="col-sm-3 offset-sm-1 blog-sidebar">
        <div class="sidebar-module sidebar-module-inset">
            <h4>Статистика</h4>
            <p>Всего постов: {{ ($statisticService->getCount()) ? $statisticService->getCount() : null }}</p>
            <p>Дата первого: {{ ($statisticService->getFirst()) ? $statisticService->getFirst()->getDate() : null }}</p>
            <p>Дата последнего: {{ ($statisticService->getLast()) ? $statisticService->getLast()->getDate() : null }}</p>
            <p>Автор первого: {{ ($statisticService->getFirst()) ? $statisticService->getUserFirst() : null }}</p>
            <p>Автор последнего: {{ ($statisticService->getLast()) ? $statisticService->getUserLast() : null }}</p>
        </div>
    </div>
@endif